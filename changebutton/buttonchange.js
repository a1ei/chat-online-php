const BUTTON = document.querySelector("button");
const SYNC = document.querySelector("#sync");

const TOGGLE = () => {
  const IS_PRESSED = BUTTON.matches("[aria-pressed=true]");
  const IS_SYNC_CHECKED = SYNC.checked;

  // 获取当前页面的路径
  const currentPath = window.location.pathname;

  // 如果SYNC未被选中，根据当前页面路径决定跳转
  // if (!IS_SYNC_CHECKED) {
  //   let targetUrl;
  //   if (currentPath === "/chat.php") {
  //     targetUrl = 'darkusers.php';
  //   } else if (currentPath === "/users.php") {
  //     targetUrl = 'darkusers.php';
  //   }
  //   else if (currentPath === "/darkusers.php") {
  //     targetUrl = 'users.php';
  //   }
  //   else if (currentPath === "/darkchat.php") {
  //     targetUrl = 'users.php';
  //   }
  //   window.location.href = targetUrl || 'users.php'; // 如果不是chat.php或user.php，默认跳转到darkchat.php
  //   return; // 结束函数执行
  // }
  if (!IS_SYNC_CHECKED) {
    const currentPath = window.location.pathname;

    let targetUrl;
    switch (currentPath) {
      case "/chat.php":
      case "/users.php":
        targetUrl = 'darkusers.php';
        break;
      case "/darkusers.php":
        targetUrl = 'users.php';
        break;
      case "/darkchat.php":
        targetUrl = 'users.php';
        break;
      default:
        // 根据实际需求调整默认跳转页面
        targetUrl = 'users.php'; // 或者 'darkchat.php'，取决于你的业务逻辑
        break;
    }

    // 如果 targetUrl 未设置，则默认跳转到 users.php
    window.location.href = targetUrl || 'users.php';

    return; // 结束函数执行
  }
  // 如果SYNC被选中，根据BUTTON是否按下设置data-dark-mode
  document.body.setAttribute("data-dark-mode", IS_PRESSED ? false : true);
  BUTTON.setAttribute("aria-pressed", IS_PRESSED ? false : true);
};

BUTTON.addEventListener("click", TOGGLE);
