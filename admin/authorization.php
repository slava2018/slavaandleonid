<?
require_once "header.php";
?>
<div class="form">
    <form class="form-horizontal" role="form" method="POST">
        <div class="form-group">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Логин</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Логин" name="login">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" placeholder="Пароль" name="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default btn-sm">Войти</button>
                </div>
            </div>
    </form>
</div>
<?
if
(
    $_POST ['login']== 1 &
    $_POST ['password']== 1
)
    echo "<a href = \"index.php\" title=\"На сайт\">На сайт</a>";
else
    echo "Ошибка! Данные введены некоректно.";
