<!DOCTYPE html>
<html>

<head>
  <title>Test project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    @yield('content')

  </div>


  <script>
    let check1 = document.getElementById('variant_1');
    let check2 = document.getElementById('variant_2');
    let check3 = document.getElementById('variant_3');
    let check4 = document.getElementById('variant_4');
    let num1 = 0;
    let num2 = 0;
    let num3 = 0;
    let num4 = 0;

    function varianta() {
      num1 += 1;
      if (num1 % 2 == 1) {
        check1.setAttribute("name", "answer_1");
      }
      if (num1 % 2 == 0) {
        check1.setAttribute("name", "variant_1");
      }

    }

    function variantb() {
      num2 += 1;
      if (num2 % 2 == 1) {
        check2.setAttribute("name", "answer_2");
      }
      if (num2 % 2 == 0) {
        check2.setAttribute("name", "variant_2");
      }

    }
    function variantc() {
      num3 += 1;
      if (num3 % 2 == 1) {
        check3.setAttribute("name", "answer_3");
      }
      if (num3 % 2 == 0) {
        check3.setAttribute("name", "variant_3");
      }

    }
    function variantd() {
      num4 += 1;
      if (num4 % 2 == 1) {
        check4.setAttribute("name", "answer_4");
      }
      if (num4 % 2 == 0) {
        check4.setAttribute("name", "variant_4");
      }

    }
  </script>
</body>

</html>