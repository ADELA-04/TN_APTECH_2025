(function ($) {
    var tfLineChart = (function () {
        // Hàm định dạng số với dấu phẩy
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + " VNĐ";
        }

        var chartBar = function (revenueData) {
            var options = {
                //khi hover
                series: [{
                    name: 'Doanh thu',
                    data: revenueData // Nhận dữ liệu doanh thu từ tham số
                }],
                chart: {
                    type: 'bar',
                    height: 335,
                    toolbar: { show: false },
                },
                plotOptions: {
                    bar: { horizontal: false, columnWidth: '10px', endingShape: 'rounded' },
                },
                dataLabels: { enabled: false },
                legend: { show: false },
                colors: '#2377FC',
                xaxis: {
                    categories: ['Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12', 'Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5'],
                    labels: { style: { colors: '#95989D' } },
                },
                tooltip: {
                    y: { formatter: function (val) { return formatNumber(val); } } // Sử dụng hàm định dạng
                },
                annotations: {
                    xaxis: [{
                        x: 'Tháng 12', // Vị trí chú thích trên trục x
                        borderColor: '#FF4560',
                        label: {
                            text: 'Cuối năm',
                            style: {
                                color: '#fff',
                                background: '#FF4560'
                            }
                        }
                    }],

                }
            };

            var chart = new ApexCharts(document.querySelector("#line-chart-10"), options);
            if ($("#line-chart-10").length > 0) {
                chart.render();
            }
        };

        return {
            load: function (revenueData) { chartBar(revenueData); },
        };
    })();

    jQuery(window).on("load", function () {
        var revenueData = window.revenueData; // Lấy dữ liệu từ biến toàn cục
        tfLineChart.load(revenueData);
    });
})(jQuery);
