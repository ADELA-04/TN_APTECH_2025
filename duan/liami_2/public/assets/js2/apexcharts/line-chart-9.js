(function ($) {
    var tfLineChart = (function () {
        var chartBar = function (percentages, productCodes, totalQuantities) {
            var options = {
                series: percentages, // Sử dụng mảng phần trăm
                chart: {
                    type: 'donut',
                    height: 423,
                },
                labels: productCodes, // Sử dụng mã sản phẩm cho legend
                plotOptions: {
                    pie: {
                        startAngle: -100,
                        endAngle: 100,
                        offsetY: 0
                    }
                },
                grid: {
                    padding: {
                        bottom: -80
                    }
                },
                responsive: [{
                    breakpoint: 991,
                    options: {
                        chart: {
                            height: 250
                        },
                    }
                }],
                //ghi chú biểu đồ
                legend: {
                    show: true,
                    position: 'top',
                },
                //hover hiển thị
                tooltip: {
                    y: {
                        formatter: function (val, { seriesIndex }) {
                            return totalQuantities[seriesIndex] + ' lượt bán'; // Hiển thị số lượt bán
                        }
                    }
                }
            };

            var chart = new ApexCharts(
                document.querySelector("#line-chart-9"),
                options
            );
            if ($("#line-chart-9").length > 0) {
                chart.render();
            }
        };

        return {
            load: function (percentages, productCodes, totalQuantities) {
                chartBar(percentages, productCodes, totalQuantities); // Gọi hàm với dữ liệu
            },
        };
    })();

    jQuery(window).on("load", function () {
        tfLineChart.load(percentages, productCodes, totalQuantities); // Gọi hàm với dữ liệu
    });
})(jQuery);
