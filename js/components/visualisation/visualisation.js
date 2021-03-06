

$(document).ready(function(){

	/**
	 * Init
	 *
	 * @return
	 */
	function init() {
        var result = getUrlPage();
        var typeVisualisation = result[0];
        var nomDonnee = result[1];

        if (typeVisualisation && nomDonnee) {

            // Get metadata
            getMetadata(nomDonnee, function(metadata) {

                // Set title
                setTitle(metadata.title);

                // Set active panel
                setActivePanel(typeVisualisation);

                // With end url, get data
                getData(metadata.link, function(data) {

                    // Set tab navbar and draw visualisation
                    setTabNavBarAndDraw(metadata, data);
                });

                setMapButton();
            });
        }
	};

	/**
	 * Init listeners
	 *
	 * @return
	 */
	var bindListeners = function() {
        // Oui c'est sale ... chuuuuuut ... si vous avez mieux à proposer GO!
        $(".tab-nav").click(function() {
            $(".tab-pane").css('display', 'none');
            $(".tab-nav").removeClass('active');
        });

        $("#tab-nav-1").click(function() {
            $('#tab-pane-1').css('display', 'block');
            $("#tab-nav-1").addClass('active');
        });

        $("#tab-nav-2").click(function() {
            $('#tab-pane-2').css('display', 'block');
            $("#tab-nav-2").addClass('active');
        });

        $("#tab-nav-3").click(function() {
            $('#tab-pane-3').css('display', 'block');
            $("#tab-nav-3").addClass('active');
            showMap();
        });

        $("#tab-nav-4").click(function() {
            $("#tab-pane-4").css('display', 'block');
            $("#tab-nav-4").addClass('active');
        });

        $("#tab-nav-5").click(function() {
            $("#tab-pane-5").css('display', 'block');
            $("#tab-nav-5").addClass('active');
        });

        // Reload the page with the new date
        $(".select-list-date").change(function() {
            // Get value of the selected item 
            var nomDonnee = $('.select-list-date :selected').val();
            var url = window.location.href.split("?");
            var activePanel = getActivePanel();
            reloadPage(url[0], nomDonnee, activePanel);
        });

        // Load the compare table
        $(".select-list-date-compare").change(function() {
            // Get value of the selected item 
            var nomDonnee = $("option:selected", this).val();
            var typeVisualisation = getActivePanel();
            
            if (nomDonnee == "none") {
                removeDrawCompare(typeVisualisation);
            } else {

                // Get metadata
                getMetadata(nomDonnee, function(metadata) {
                    // With end url, get data
                    getData(metadata.link, function(data) {
                        if (data) {
                            // Draw visualisation
                            drawCompare(typeVisualisation, metadata, data);
                        } else {
                            alert("Une erreur est survenue: Aucune donnée n'a pu être chargé.");
                        }
                    });
                });
            }
        });
	};

    /**
     * Get the panel active
     *
     * @return type if visualisation 
     */
    var getActivePanel = function() {
        if ($("#tab-nav-1").hasClass("active")) {
            return "table";
        } else if ($("#tab-nav-2").hasClass("active")) {
            return "graph";
        } else {
            return "map";
        }
    };

    /**
     * Draw compare visualisation
     *
     * @return null
     */
    var drawCompare = function(typeVisualisation, metadata, data) {

        switch (typeVisualisation) {
            case 'table':
                // Remove the table compare if exists
                if ($("#my_table_box1Compare_wrapper").length) {
                    $("#my_table_box1Compare_wrapper").remove();
                
                // Else, create div compare
                } else {
                    var div = document.createElement('div');
                    div.id = 'box1Compare';
                    div.className = 'box-visu';
                    $("#tab-pane-1 .box-wrapper-inner").append(div);
                }

                // Call draw table method
                drawTable(data, metadata, 'box1Compare');
                break;

            case 'graph':

                // Remove the table compare if exists
                if ($("#box2Compare").length) {
                    $("#box2Compare").remove();
                
                // Else, create div compare
                } else {
                    var div = document.createElement('div');
                    div.id = 'box2Compare';
                    div.className = 'box-visu';
                    $("#tab-pane-2 .box-wrapper-inner").append(div);
                }
                drawGraph(data, metadata, 'box2Compare');
                break;
        }
    };

    /**
     * Remove compare visualisation if existe
     *
     * @return null
     */
    var removeDrawCompare = function(typeVisualisation) {
        switch (typeVisualisation) {
            case 'table':
                // Remove the table compare
                if ($("#my_table_box1Compare_wrapper").length) {
                    $("#box1Compare").remove();
                }
                break;

            case 'graph':
                // Remove the graph compare
                if ($("#box2Compare").length) {
                    $("#box2Compare").remove();
                }
                break;
        }
        
    };

    /**
     * Set buttons to map panel
     *
     * @return
     */
    var setMapButton = function() {
        $(".button-icone").on("click", function() {
            // If the marks are visible, hide them
            if ($(this).val() === "true") {
                $(this).val("false");
                $(this).css({opacity: 0.5});

                // Remove bus marks
                if($(this).attr('id') === "button-icone-bus") {
                    hideLayerBus();
                }

                // Remove poste marks
                if($(this).attr('id') === "button-icone-poste") {
                    hideLayerPoste();
                }

            // Else, show them
            } else {
                $(this).val("true");
                $(this).css({opacity: 1});

                // Draw bus marks
                if($(this).attr('id') === "button-icone-bus") {
                    showLayerBus();
                }

                // Draw poste marks
                if($(this).attr('id') === "button-icone-poste") {
                    showLayerPoste();
                }
            }
        });
    };

    /**
     * Set the title of the page
     *
     * @return
     */
    var setTitle = function(title) {
        $("#title-page").html(title);
    };

    /**
     * Set the second title of the page
     *
     * @return
     */
    var setDescription = function(metadata) {
        $("#description-page").html(metadata.description);
    };

    /**
     * Set active panel
     *
     * @return
     */
    var setActivePanel = function(typeVisualisation) {
        switch (typeVisualisation) {
            case 'table':
                $('#tab-pane-1').css('display', 'block');
                $("#tab-nav-1").addClass('active');
                break;

            case 'graph':
                $('#tab-pane-2').css('display', 'block');
                $("#tab-nav-2").addClass('active');
                break;

            case 'map':
                $('#tab-pane-3').css('display', 'block');
                $("#tab-nav-3").addClass('active');
                break;

            case 'info':
                $('#tab-pane-4').css('display', 'block');
                $("#tab-nav-4").addClass('active');
                break;
        }
    };

    /**
     * Set the tab navbar
     *
     * @return type if visualisation 
     */
    var setTabNavBarAndDraw = function(metadata, data) {

        if(metadata.table) {
            drawTable(data, metadata, 'box1');
        } else {
            $("#tab-nav-1").css('display', 'none');
        }

        if(metadata.graph) {
            drawGraph(data, metadata, 'box2');
        } else {
            $("#tab-nav-2").css('display', 'none');
        }

        if(metadata.map) {
            drawMap(data, metadata, 'box3', 'popup');
        } else {
            $("#tab-nav-3").css('display', 'none');
        }

        if(metadata.timeline) {
            // Draw timeline
            $('.select-list-date').append("<p class='select-list select-list-text'>Choisissez l'année : </p>");
            var sel = $('<select>').appendTo('.select-list-date');
            sel.addClass("select-list");
            sel.addClass("select-list-select");
            sel.addClass("form-control");

            $('.select-list-date-compare').append("<p class='select-list select-list-text'>La comparer avec : </p>");
            var selCompare = $('<select>').appendTo('.select-list-date-compare');
            selCompare.addClass("select-list");
            selCompare.addClass("select-list-select");
            selCompare.append($("<option>").attr('value','none').text('...'));
            selCompare.addClass("form-control");

            for (var key in metadata.timeline.dates) {
                sel.append($("<option>").attr('value',metadata.timeline.dates[key]).text(key));
                selCompare.append($("<option>").attr('value',metadata.timeline.dates[key]).text(key));
            }

            // Set active select
            $(".select-list-date select").val(metadata.timeline.dates[metadata.timeline.actualDate]);

            // Set description
            setDescription(metadata);
        }
    };

	init();
	bindListeners();
});
