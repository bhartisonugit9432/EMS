function emp_cat_line() {
    var tb = document.getElementById('emp_cat');
    var x1 = tb.rows[1].cells[1].innerHTML;
    var x2 = tb.rows[2].cells[1].innerHTML;
    var d1 = tb.rows[1].cells[2].innerHTML;
    var d2 = tb.rows[2].cells[2].innerHTML;

    var xValues = [x1, x2];

    new Chart("myChart", {
        type: "line",

        data: {
            labels: xValues,
            datasets: [{
                label: 'Total Emp.',
                data: [d1, d2],
                borderColor: "rgba(150, 0, 255, 1)",
                pointRadius: 3,
                borderWidth: 2,
                tension: 0.4,
                backgroundColor: 'rgba(150, 0, 255, .2)',
                fill: true
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: '[ Number of Employees ]'
                }

            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

}

function emp_cat_Bar_expense() {
    var tb = document.getElementById('emp_cat');
    var x1 = tb.rows[1].cells[1].innerHTML;
    var x2 = tb.rows[2].cells[1].innerHTML;
    var d1 = tb.rows[1].cells[3].innerHTML;
    var d2 = tb.rows[2].cells[3].innerHTML;

    const ctx = document.getElementById('myChart1').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [x1, x2],
            datasets: [{
                label: 'EMP Category',
                data: [d1, d2],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: '[ Estimated Cost ]'
                }
            }
        }
    });

}

function emp_course_line() {
    var tb = document.getElementById('course_wise');
    var x1 = tb.rows[1].cells[1].innerHTML;
    var x2 = tb.rows[2].cells[1].innerHTML;
    var x3 = tb.rows[3].cells[1].innerHTML;
    var x4 = tb.rows[4].cells[1].innerHTML;
    var d1 = tb.rows[1].cells[2].innerHTML;
    var d2 = tb.rows[2].cells[2].innerHTML;
    var d3 = tb.rows[3].cells[2].innerHTML;
    var d4 = tb.rows[4].cells[2].innerHTML;

    var xValues = [x1, x2, x3, x4];

    new Chart("myChart_course_emp_line", {
        type: "line",

        data: {
            labels: xValues,
            datasets: [{
                label: 'Total Emp.',
                data: [d1, d2, d3, d4],
                borderColor: "blue",
                pointRadius: 3,
                borderWidth: 2,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: '[ Number of Employees ]'
                }

            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

}

function emp_course_Bar_expense() {
    var tb = document.getElementById('course_wise');
    var x1 = tb.rows[1].cells[1].innerHTML;
    var x2 = tb.rows[2].cells[1].innerHTML;
    var x3 = tb.rows[3].cells[1].innerHTML;
    var x4 = tb.rows[4].cells[1].innerHTML;
    var d1 = tb.rows[1].cells[3].innerHTML;
    var d2 = tb.rows[2].cells[3].innerHTML;
    var d3 = tb.rows[3].cells[3].innerHTML;
    var d4 = tb.rows[4].cells[3].innerHTML;

    const ctx = document.getElementById('myChart1_course_cost_bar').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [x1, x2, x3, x4],
            datasets: [{
                label: 'EMP Category',
                data: [d1, d2, d3, d4],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'

                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: '[ Estimated Cost ]'
                }
            }
        }
    });

}

function emp_nonacdemic_line() {
    var tb = document.getElementById('nonacademic_wise');
    var x1 = tb.rows[1].cells[1].innerHTML;
    var x2 = tb.rows[2].cells[1].innerHTML;
    var x3 = tb.rows[3].cells[1].innerHTML;
    var x4 = tb.rows[4].cells[1].innerHTML;
    var d1 = tb.rows[1].cells[2].innerHTML;
    var d2 = tb.rows[2].cells[2].innerHTML;
    var d3 = tb.rows[3].cells[2].innerHTML;
    var d4 = tb.rows[4].cells[2].innerHTML;

    var xValues = [x1, x2, x3, x4];

    new Chart("myChart_nonacademic_emp_line", {
        type: "line",

        data: {
            labels: xValues,
            datasets: [{
                label: 'Total Emp.',
                data: [d1, d2, d3, d4],
                borderColor: "tomato",
                pointRadius: 3,
                borderWidth: 2,
                backgroundColor: 'rgba(255, 182, 169, 0.4)',
                tension: 0.4,
                fill: true,
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: '[ Number of Employees ]'
                }

            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

}

function emp_nonacademic_Bar_expense() {
    var tb = document.getElementById('nonacademic_wise');
    var x1 = tb.rows[1].cells[1].innerHTML;
    var x2 = tb.rows[2].cells[1].innerHTML;
    var x3 = tb.rows[3].cells[1].innerHTML;
    var x4 = tb.rows[4].cells[1].innerHTML;
    var d1 = tb.rows[1].cells[3].innerHTML;
    var d2 = tb.rows[2].cells[3].innerHTML;
    var d3 = tb.rows[3].cells[3].innerHTML;
    var d4 = tb.rows[4].cells[3].innerHTML;

    const ctx = document.getElementById('myChart1_nonacademic_cost_bar').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [x1, x2, x3, x4],
            datasets: [{
                label: 'EMP Category',
                data: [d1, d2, d3, d4],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'

                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: '[ Estimated Cost ]'
                }
            }
        }
    });

}