<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
function myFunction() {
    window.print();
}
function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>
<style>
table {
    width:100%;
    height:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    width: 15px;
    height: auto;
    text-align: left;
}
</style>
  </head>
  <body>
    <form>
      <table style="widht:100%" style="height:100%">
        <tr>
          <th>JAM</th>
          <th>R1</th>
          <th>R2</th>
          <th>R3</th>
          <th>R4</th>
          <th>R5</th>
          <th>R6</th>
          <th>R7</th>
          <th>R8</th>
          <th>R9</th>
        </tr>
        <tr>
          <td height="50px">08.00 - 08.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">09.00 - 09.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">10.00 - 10.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">11.00 - 11.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td>12.00 - 13.00</td>
        </tr>
        <tr>
          <td height="50px">13.00 - 13.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">14.00 - 14.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">15.00 - 15.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">16.00 - 16.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">17.00 - 17.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">18.00 - 18.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">19.00 - 19.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td height="50px">19.20 - 20.50</td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td><button type="button" onclick="myFunction()" name="button">Print</button> </td>
        </tr>
      </table>
    </form>
  </body>
</html>
