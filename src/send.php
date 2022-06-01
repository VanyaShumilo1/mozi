<?
if(mail($_POST['email'],'тестовый заголовок письма',$_POST['message'],'Content-type: text/html; charset=utf-8')){
    echo 'Сообщение отправлено!';
}else{
    echo 'Ошибка отправки сообщения.';
}

?>
