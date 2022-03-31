<!DOCTYPE html>

<html> <title>biodata</title>
<link href="ind.css" rel="stylesheet">
<body>

<h3 align="center">From Biodata</h3>
<div>
  <form action="/action_page.php">
    
  <table  width="1000" align="center">
    <tr>
    <td align="center" width="250" bgcolor="#00FFFF">
    <label for="nama">Nama :</label></td>
<td bgcolor="#00FFFF"> <input type="text" id="fname" name="firstname" placeholder="Nama Lengkap Anda"></td>
</td></tr>
<tr>
<td bgcolor="#A9A9A9" align="center">
    <label for="alamat">Alamat </label></td>
    <td bgcolor="#A9A9A9"><input type="text" id="lname" name="alamat" placeholder="Alamat Lengkap Anda.."></td>
</tr>
<tr>
<td bgcolor="#00FFFF" height="50" align="center">
J / K :</td >
<td  bgcolor="#00FFFF">
  <input type="radio"  value="l" checked> Laki-laki
  <input type="radio"  value="p"> Perempuan
</td>
</tr>
<td bgcolor="#A9A9A9" height="50" align="center">  
Hobi :</td>
<td bgcolor="#A9A9A9">
<input type="checkbox"> Makan
<input type="checkbox"> Tidur
<input type="checkbox"> Membaca 
</td>
</tr>
<tr>
<td bgcolor="#00FFFF" align="center">
    <label for="country">Agama</label></td>
    <td bgcolor="#00FFFF">
    <select id="country" name="country">
      <option value="australia">Islam</option>
      <option value="canada">Kristen</option>
      <option value="usa">Hindu</option>
      <option value="usa">Budha</option>
    </select></td>
</tr>
<tr>
  <td bgcolor="#A9A9A9" height="50" align="center"> 
Ket :</td>
<td bgcolor="#A9A9A9">
  <input type="file" name="pic" accept="image/*">
</td>
</tr>
<tr>
<td colspan="2" align="center">
    <input type="submit" value="Submit">
    <input type="submit" value="Reset">
</td></tr>
</table>
  </form>
</div>
</body>
</html>


