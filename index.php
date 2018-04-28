<?php
if(
    //base64_encode($_POST['password'])=='eGhqYXlsag=='||xhjaylj
    base64_encode($_POST['password'])=='6LCi5rWp5p2w5rC46L+c54ix5p2o5Li95aif'|| //xhjyyaylj
    base64_encode($_POST['password'])=='6LCi5rWp5p2w54ix5p2o5Li95aif'||//xhjaylj
    base64_encode($_POST['password'])=='5p2o5Li95aif54ix6LCi5rWp5p2w'||//yljaxhj
    base64_encode($_POST['password'])=='5p2o5Li95aif5Lmf54ix6LCi5rWp5p2w'||//yljyaxhj
    base64_encode($_POST['password'])=='MjAxNzA3MDM='//20170703
){
    include  __DIR__.'/love.html';
}else{
    include __DIR__.'/login.html';
}
