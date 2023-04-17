$(function() {
    $(".mapcontainer").mapael({
        map: {
            name: "angola",
            defaultArea: {
                attrs: {
                    stroke: "#fff",
                    "stroke-width": 1
                }
            }
        },
        legend: {
            area: {
                title: "Pontos Angola Online",
                slices: [{
                        max: 5,
                        attrs: {
                            fill: "#0F0F8F"
                        },
                        label: "Menos de 5 pontos"
                    },
                    {
                        min: 6,
                        max: 10,
                        attrs: {
                            fill: "#1C1CD2"
                        },
                        label: "Mais de 5 pontos"
                    },
                    {
                        min: 11,
                        max: 20,
                        attrs: {
                            fill: "#4444E3"
                        },
                        label: "Mais de 10 pontos"
                    },
                    {
                        min: 21,
                        attrs: {
                            fill: "#4C4CEA"
                        },
                        label: "Mais de 20 pontos"
                    }
                ]
            }
        },
        areas: {

            "AO-BGO": {
                "value": "10",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Bengo<\/span><br \/> 10 pontos"
                },
                "text": {
                    "content": "Bengo",
                    "margin": {
                        "x": -10,
                        "y": 20
                    }
                }
            },
            "AO-BGU": {
                "value": "10",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Benguela<\/span><br \/> 10 ponto(s)"
                },
                "text": {
                    "content": "Benguela"
                }
            },

            "AO-BIE": {
                "value": "10",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Bié<\/span><br \/> 10 ponto(s)"
                },
                "text": {
                    "content": "Bié"
                }
            },
            "AO-CAB": {
                "value": "3",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Cabinda<\/span><br \/> 3 ponto(s)"
                },
                "text": {
                    "position": "right",
                    "content": "Cabinda",
                    "attrs": {
                        "fill": "rgba(14,14,98,0.7)",
                        "font-weight": "bold"
                    },
                    "attrsHover": {
                        "fill": "#D94814",
                        "animDuration": 300
                    }
                }
            },
            "AO-CCU": {
                "value": "3",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Cuando-Cubango<\/span><br \/> 3 ponto(s)"
                },
                "text": {
                    "content": "Cuando-Cubango"
                }
            },
            "AO-CNO": {
                "value": "7",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Cuanza Norte<\/span><br \/> 7 ponto(s)"
                },
                "text": {
                    "content": "Cuanza Norte"
                }
            },
            "AO-CUS": {
                "value": "6",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Cuanza Sul<\/span><br \/> 6 ponto(s)"
                },
                "text": {
                    "content": "Cuanza Sul"
                }
            },
            "AO-CNN": {
                "value": "5",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Cunene<\/span><br \/> 5 ponto(s)"
                },
                "text": {
                    "content": "Cunene"
                }
            },
            "AO-HUA": {
                "value": "4",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Huambo<\/span><br \/> 4 ponto(s)"
                },
                "text": {
                    "content": "Huambo"
                }
            },
            "AO-HUI": {
                "value": "5",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Huíla<\/span><br \/> 5 ponto(s)"
                },
                "text": {
                    "content": "Huíla"
                }
            },
            "AO-LUA": {
                "value": "47",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Luanda<\/span><br \/> 47 ponto(s)"
                },
                "text": {
                    "position": "left",
                    "content": "Luanda",
                    "attrs": {
                        "fill": "rgba(14,14,98,0.7)",
                        "font-weight": "bold"
                    },
                    "attrsHover": {
                        "fill": "#D94814",
                        "animDuration": 300
                    }
                }
            },
            "AO-LNO": {
                "value": "0",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Lunda Norte<\/span><br \/> 0 ponto(s)"
                },
                "text": {
                    "content": "Lunda Norte"
                }
            },
            "AO-LSU": {
                "value": "3",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Lunda Sul<\/span><br \/> 3 ponto(s)"
                },
                "text": {
                    "content": "Lunda Sul",
                    "margin": {
                        "x": 10,
                        "y": 10
                    }
                }
            },
            "AO-MAL": {
                "value": "2",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Malanje<\/span><br \/> 2 ponto(s)"
                },
                "text": {
                    "content": "Malanje",
                    "margin": {
                        "x": -10,
                        "y": 0
                    }
                }
            },
            "AO-MOX": {
                "value": "3",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Moxico<\/span><br \/> 3 ponto(s)"
                },
                "text": {
                    "content": "Moxico"
                }
            },
            "AO-NAM": {
                "value": "6",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Namibe<\/span><br \/> 6 ponto(s)"
                },
                "text": {
                    "content": "Namibe"
                }
            },
            "AO-UIG": {
                "value": "3",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Uíge<\/span><br \/> 3 ponto(s)"
                },
                "text": {
                    "content": "Uíge"
                }
            },
            "AO-ZAI": {
                "value": "2",
                "href": "#",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Zaire<\/span><br \/> 2 ponto(s)"
                },
                "text": {
                    "content": "Zaire",
                    "margin": {
                        "x": -10,
                        "y": -5
                    }
                }
            }
        }
    });
});
