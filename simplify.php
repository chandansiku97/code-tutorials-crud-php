<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="assets/css/shortHeight.css">

<title>Simplify</title>
</head>
<body>

<form method="POST">
<div class="container topshortHeight">
<div class="row">

<div class="col-sm-1">
  <input type="number" id="txtdata1" class="form-control" autocomplete="off" oninput="copyContent()">
</div>

<div class="col-sm-1">
  <select class="form-select" id="operator1" onchange="copyContent()">
    <option selected ></option>
    <option value="[">[</option>
    <option value="]">]</option>
    <option value="{">{</option>
    <option value="}">}</option>
    <option value="(">(</option>
    <option value=")">)</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="%">%</option>
  </select>
</div>

<div class="col-sm-1">
  <input type="number" id="txtdata2" class="form-control" autocomplete="off" oninput="copyContent()">
</div>

<div class="col-sm-1">
  <select class="form-select" id="operator2" onchange="copyContent()">
    <option selected></option>
    <option value="[">[</option>
    <option value="]">]</option>
    <option value="{">{</option>
    <option value="}">}</option>
    <option value="(">(</option>
    <option value=")">)</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="%">%</option>
  </select>
</div>

<div class="col-sm-1">
  <input type="number" id="txtdata3" class="form-control" autocomplete="off" oninput="copyContent()">
</div>

<div class="col-sm-1">
  <select class="form-select" id="operator3" onchange="copyContent()">
    <option selected></option>
    <option value="[">[</option>
    <option value="]">]</option>
    <option value="{">{</option>
    <option value="}">}</option>
    <option value="(">(</option>
    <option value=")">)</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="%">%</option>
  </select>
</div>

<div class="col-sm-1">
  <input type="number" id="txtdata4" class="form-control" autocomplete="off" oninput="copyContent()">
</div>

<div class="col-sm-1">
  <select class="form-select" id="operator4" onchange="copyContent()">
    <option selected></option>
    <option value="[">[</option>
    <option value="]">]</option>
    <option value="{">{</option>
    <option value="}">}</option>
    <option value="(">(</option>
    <option value=")">)</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="%">%</option>
  </select>
</div>

<div class="col-sm-1">
  <input type="number" id="txtdata5" class="form-control" autocomplete="off" oninput="copyContent()">
</div>


<div class="col-sm-1">
  <select class="form-select" id="operator5" onchange="copyContent()">
    <option selected></option>
    <option value="[">[</option>
    <option value="]">]</option>
    <option value="{">{</option>
    <option value="}">}</option>
    <option value="(">(</option>
    <option value=")">)</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="%">%</option>
  </select>
</div>

<div class="col-sm-1">
  <input type="number" id="txtdata6" class="form-control" autocomplete="off" value="+0" readonly="">
</div>


<div class="col-sm-1">
  <button class="btn btn-success" type="submit" name="calculate">Calculate</button>
</div>




</div>

</div>

<div class="container topshortHeight">
  <h6>Complete Equation Here:</h6>
<input type="text" name="completeEquation" id="simplify" class="form-control" readonly="">
</div>

</form>
<!-- section for formulating the number and operators starts here -->


<script type="text/javascript">
function copyContent()
{
  var simplify = document.getElementById('simplify');

  var txtdata1 = document.getElementById('txtdata1');
  var operator1 = document.getElementById('operator1');
  operator1.value = operator1.options[operator1.selectedIndex].text;

  var txtdata2 = document.getElementById('txtdata2');
  var operator2 = document.getElementById('operator2');
  operator2.value = operator2.options[operator2.selectedIndex].text;

  var txtdata3 = document.getElementById('txtdata3');
  var operator3 = document.getElementById('operator3');
  operator3.value = operator3.options[operator3.selectedIndex].text;

  var txtdata4 = document.getElementById('txtdata4');
  var operator4 = document.getElementById('operator4');
  operator4.value = operator4.options[operator4.selectedIndex].text;

  
  var txtdata5 = document.getElementById('txtdata5');
  var operator5 = document.getElementById('operator5');
  operator5.value = operator5.options[operator5.selectedIndex].text;

  simplify.value = txtdata1.value + operator1.value + txtdata2.value + operator2.value + txtdata3.value + operator3.value + txtdata4.value + operator4.value + txtdata5.value + operator5.value + "+0";

}

</script>




<!-- section for formulating the number and operators ends here -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>



<?php
  
  if(isset($_POST['calculate']))
  {
    $string = $_POST['completeEquation'];

    $math_string = "print(".$string.");";

    $result = eval($math_string);

    echo  $result;
  }

?>
