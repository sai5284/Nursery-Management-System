<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name="form1" method="post" action="">
                  <table width="693" border="0" align="center">
                    <tr>
                      <td width="226"><div align="center"><span class="style8">Full Name </span></div></td>
                      <td width="457"><label>
                        <input type="text" name="textfield" value="<%out.println(n);%>"/>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td height="28"><div align="center"><span class="style8">Feedback</span></div></td>
                      <td><label>
                        <input type="text" name="textfield2" required="required" />
                      </label></td>
                    </tr>
                    <tr>
                      <td><div align="center"><span class="style8">Phone No </span></div></td>
                      <td><label>
                        <input name="textfield3" type="text" maxlength="10"  value="<%out.println(m);%>"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td><div align="center"><span class="style8">E-Mail</span></div></td>
                      <td><input type="email" name="textfield4"  value="<%out.println(e);%>"/></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div align="center">Rate This </div>
                          <div class="stars">
                            <input name="star" type="radio" class="star-1" id="star-1" value="1" />
                            <label class="star-1" for="star-1">1</label>
                            <input name="star" type="radio" class="star-2" id="star-2" value="2" />
                            <label class="star-2" for="star-2">2</label>
                            <input name="star" type="radio" class="star-3" id="star-3" value="3" />
                            <label class="star-3" for="star-3">3</label>
                            <input name="star" type="radio" class="star-4" id="star-4" value="4" />
                            <label class="star-4" for="star-4">4</label>
                            <input name="star" type="radio" class="star-5" id="star-5" value="5" />
                            <label class="star-5" for="star-5">5</label>
                            <span></span> </div>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <input type="submit" name="Submit" value="Submit" />
                          <input type="reset" name="Submit2" value="Reset" />
                      </div></td>
                    </tr>
                  </table>
                                </form>
</body>
</html>
