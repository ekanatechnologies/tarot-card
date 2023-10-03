!function (e) {
    var t = function () {
        e(window).width();
        var t = function () {
            var e = document.querySelector(".change-btn"), t = document.querySelector(".reload"), o = 0;
            e.addEventListener("click", (function () {
                !1, o += 360, t.style.webkitTransform = "translateZ(0px) rotateZ( " + o + "deg )", t.style.MozTransform = "translateZ(0px) rotateZ( " + o + "deg )", t.style.transform = "translateZ(0px) rotateZ( " + o + "deg )"
            })), setTimeout((function () {
                e.classList.add("active")
            }), 1);
            var a = document.getElementById("slider-format");
            noUiSlider.create(a, {
                start: [2e4],
                step: 1e3,
                connect: [!0, !1],
                range: {min: [2e4], max: [8e4]},
                ariaFormat: wNumb({decimals: 3}),
                format: wNumb({decimals: 3, thousand: "."})
            });
            var r = document.getElementById("input-format");
            a.noUiSlider.on("update", (function (e, t) {
                r.value = e[t]
            })), r.addEventListener("change", (function () {
                a.noUiSlider.set(this.value)
            }))
        };
        return {
            init: function () {
            }, load: function () {
                var e, o;
                e = {
                    series: [{name: "Income", data: [50, 18, 70, 40]}, {name: "Outcome", data: [80, 40, 55, 20]}],
                    chart: {type: "bar", height: 200, toolbar: {show: !1}},
                    plotOptions: {bar: {horizontal: !1, columnWidth: "57%", borderRadius: 12}},
                    states: {hover: {filter: "none"}},
                    colors: ["#80ec67", "#fe7d65"],
                    dataLabels: {enabled: !1},
                    markers: {shape: "circle"},
                    legend: {
                        position: "top",
                        horizontalAlign: "right",
                        show: !1,
                        fontSize: "12px",
                        labels: {colors: "#000000"},
                        markers: {
                            width: 18,
                            height: 18,
                            strokeWidth: 0,
                            strokeColor: "#fff",
                            fillColors: void 0,
                            radius: 12
                        }
                    },
                    stroke: {show: !0, width: 4, colors: ["transparent"]},
                    grid: {borderColor: "#eee"},
                    xaxis: {
                        categories: ["Sun", "Mon", "Tue", "Wed"],
                        labels: {
                            style: {
                                colors: "#3e4954",
                                fontSize: "13px",
                                fontFamily: "poppins",
                                fontWeight: 400,
                                cssClass: "apexcharts-xaxis-label"
                            }
                        },
                        crosshairs: {show: !1}
                    },
                    yaxis: {
                        labels: {
                            offsetX: -16,
                            style: {
                                colors: "#3e4954",
                                fontSize: "13px",
                                fontFamily: "poppins",
                                fontWeight: 400,
                                cssClass: "apexcharts-xaxis-label"
                            }
                        }
                    },
                    fill: {opacity: 1, colors: ["#80ec67", "#fe7d65"]},
                    tooltip: {
                        y: {
                            formatter: function (e) {
                                return "$ " + e + " thousands"
                            }
                        }
                    },
                    responsive: [{breakpoint: 1600, options: {chart: {height: 400}}}, {
                        breakpoint: 575,
                        options: {chart: {height: 250}}
                    }]
                }, new ApexCharts(document.querySelector("#chartBar"), e).render(), function () {
                    var e = {
                        series: [{name: "Income", data: [50, 18, 70, 40, 90, 50]}, {
                            name: "Outcome",
                            data: [80, 40, 55, 20, 50, 70]
                        }],
                        chart: {type: "bar", height: 400, toolbar: {show: !1}},
                        plotOptions: {bar: {horizontal: !1, columnWidth: "70%", borderRadius: 10}},
                        states: {hover: {filter: "none"}},
                        colors: ["#80ec67", "#fe7d65"],
                        dataLabels: {enabled: !1},
                        markers: {shape: "circle"},
                        legend: {
                            position: "top",
                            horizontalAlign: "right",
                            show: !1,
                            fontSize: "12px",
                            labels: {colors: "#000000"},
                            markers: {
                                width: 18,
                                height: 18,
                                strokeWidth: 0,
                                strokeColor: "#fff",
                                fillColors: void 0,
                                radius: 12
                            }
                        },
                        stroke: {show: !0, width: 5, colors: ["transparent"]},
                        grid: {borderColor: "#eee"},
                        xaxis: {
                            categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri"],
                            labels: {
                                style: {
                                    colors: "#3e4954",
                                    fontSize: "13px",
                                    fontFamily: "poppins",
                                    fontWeight: 400,
                                    cssClass: "apexcharts-xaxis-label"
                                }
                            },
                            crosshairs: {show: !1}
                        },
                        yaxis: {
                            labels: {
                                offsetX: -16,
                                style: {
                                    colors: "#3e4954",
                                    fontSize: "13px",
                                    fontFamily: "poppins",
                                    fontWeight: 400,
                                    cssClass: "apexcharts-xaxis-label"
                                }
                            }
                        },
                        fill: {opacity: 1, colors: ["#80ec67", "#fe7d65"]},
                        tooltip: {
                            y: {
                                formatter: function (e) {
                                    return "$ " + e + " thousands"
                                }
                            }
                        },
                        responsive: [{breakpoint: 575, options: {chart: {height: 250}}}]
                    };
                    new ApexCharts(document.querySelector("#chartBar2"), e).render()
                }(), o = document.getElementById("polarChart").getContext("2d"), new Chart(o, {
                    type: "polarArea",
                    data: {
                        labels: ["Video Consult", "Text Chat", "Gifting"],
                        datasets: [{
                            backgroundColor: ["#496ecc", "#68e365", "#ffa755", "#c8c8c8"],
                            data: [60, 20, 20]
                        }]
                    },
                    options: {
                        plugins: {legend: !1},
                        maintainAspectRatio: !1,
                        scales: {r: {ticks: {display: !1}, grid: {display: !1}}},
                        tooltips: {enabled: !1}
                    }
                }), t()
            }, resize: function () {
            }
        }
    }();
    jQuery(window).on("load", (function () {
        setTimeout((function () {
            t.load()
        }), 1e3)
    }))
}(jQuery);
