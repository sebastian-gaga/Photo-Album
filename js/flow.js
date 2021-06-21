     var i = 0;
      function move() {
        if (i == 0) {
          i = 1;
          var elem = document.getElementById("myBar");
          var width = 1;
          var id = setInterval(frame, 10);
          function frame() {
            if (width >= 100) {
              clearInterval(id);
              i = 0;
            } else {
              width++;
              elem.style.width = width + "%";
            }
          }
        }
      }

      $(function(){
            $('input[type=radio][name=Q1]').change(function() {
              move();
              $(".question1").addClass("hide");
              $(".quest1").addClass("hide");
              $(".question2").removeClass("hide");
              $(".quest2").removeClass("hide");
           });
            $('input[type=radio][name=Q2]').change(function() {
              window.location.href="test.html";
              });
      });