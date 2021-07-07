<form action="" method="post" enctype="multipart/form-data">
    <p style="text-align:center;"><b>Выберите файл</b></p>
    <!--Выводится ошибка если не выпонены условия по загрузке файла-->
    <h6 style="text-align:center; color: red;"><?=$upload_fhoto;?></h6>
    <p style="text-align:center;"><input name="userfile" size="200" type="file"/></p> 
    <br/> 
    <p style="text-align:center;"> 
    <input name="download" value="Загрузить" type="submit"/> </p> 
</form>