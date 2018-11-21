
<div id="page_content">
      
<div class="container-fluid">
    <div id="indice_pag">          
        <p>Estudiante > Simulacros</p>
    </div>     
    
    <div id="cotenido_pag">          
      
      <div id="clock"></div>

    </div>              
</div>
    
</div>
   
   <!-------------------------------------->
    <footer class="small text-center text-white-50">
      <div class="container">
        Copyright &copy; Ingeniería de Software
      </div>
    </footer>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  
   <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/template/js/grayscale.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  
   <!--Agregar Cronómetro-->
   <script type="text/javascript">

     window.onload = function(e){

    var $clock = $('#clock'),
        eventTime = moment('1-12-2018 22:56:00', 'DD-MM-YYYY HH:mm:ss').unix(),
        currentTime = moment().unix(), 
        diffTime = eventTime - currentTime,
        duration = moment.duration(diffTime * 1000, 'milliseconds'),
        interval = 1000;

    // if time to countdown
    if(diffTime > 0) {

        // Show clock
        // $clock.show();

        var $d = $('<div class="days" ></div>').appendTo($clock),
            $h = $('<div class="hours" ></div>').appendTo($clock),
            $m = $('<div class="minutes" ></div>').appendTo($clock),
            $s = $('<div class="seconds" ></div>').appendTo($clock);

        setInterval(function(){

            duration = moment.duration(duration.asMilliseconds() - interval, 'milliseconds');
            var d = moment.duration(duration).days(),
                h = moment.duration(duration).hours(),
                m = moment.duration(duration).minutes(),
                s = moment.duration(duration).seconds();

            d = $.trim(d).length === 1 ? '0' + d : d;

            // show how many hours, minutes and seconds are left
            $d.text(d+" "+h+" "+m+" "+s);


        }, interval);

    }

};
   </script>

  </body>

</html>