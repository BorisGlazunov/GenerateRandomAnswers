<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript">
function copyit(theField) {
var tempval=eval("document."+theField)
tempval.focus()
tempval.select()
therange=tempval.createTextRange()
therange.execCommand("Copy")
}
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<form name="it">
<textarea name="komanda1" rows="1" cols="100">
1. Сервер будет выключен через 15 для провидения технических работ.
</textarea>
<input onclick="copyit('it.komanda1')" type="button" value="Профилактика сервера">
<br />
<textarea name="komanda2" rows="1" cols="100">
2. Здравствуйте, чем я могу Вам помочь?
</textarea>
<input onclick="copyit('it.komanda2')" type="button" value="Приветствие">
</form>
</body>
</html>