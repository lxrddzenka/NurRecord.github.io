<div class="form-wrapper">
      <form action="https://httpbin.org/post" method="post">
        <label for="login">Логин</label>
        <input type="text" id="login" name="login" />

        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" />

        <div class="input-wrapper">
          <input type="checkbox" id="rememberMe" name="rememberMe" />
          <label for="rememberMe">Запомнить меня</label>
        </div>

        <div class="btn">
          <button type="submit">Отправить</button>
        </div>
      </form>
    </div>