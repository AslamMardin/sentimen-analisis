  $(document).ready(function() {
    $('#background-loading').hide()

    $('#loading-chart').show()
    $('.canvas-group').hide()
    const ambilData = (fileName = "db_unasman.php", name = "unasman", loading = false) => {
     $.ajax({
      url: fileName,
      success:function(result){
        result = JSON.parse(result)
        results = result.data
        // console.log(results);
        let v = []
        let p = []
        loading = true;
        for(let prop in results){
          v.push(results[prop])
          p.push("Tgl " + prop)
        }
        myChart({
          p, v
        }, name)
        if (loading) {
          if (name == "sulbar") {
          $('.canvas-group').show()
          }
        }
      }
    })
   }
   ambilData("http://localhost:8000/unasman", "unasman");
   ambilData("http://localhost:8000/polewali", "polewali");
   ambilData("http://localhost:8000/sulbar", "sulbar");
   
   


function myChart(data, name = "unasman"){
// chart

feather.replace({ 'aria-hidden': 'true' })
  // Graphs
  const ctx = document.getElementById('myChart-'+name)
  // eslint-disable-next-line no-unused-vars
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: data.p,
      datasets: [{
        data: data.v,
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 2,
        pointBackgroundColor: '#3423f2'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })

// end chart
$('#loading-chart').hide()

}


})


