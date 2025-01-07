var models = [
    "https://unpkg.com/live2d-widget-model-shizuku@1.0.5/assets/shizuku.model.json",
    "https://unpkg.com/live2d-widget-model-z16@1.0.5/assets/z16.model.json",
    "https://unpkg.com/live2d-widget-model-miku@1.0.5/assets/miku.model.json",
    "../live2d-widget-model-chitose/assets/chitose.model.json",
    "../live2d-widget-model-epsilon2_1/assets/Epsilon2.1.model.json",
    "../live2d-widget-model-haru_1/assets/haru01.model.json",
    "../live2d-widget-model-haru_2/assets/haru02.model.json",
    "../live2d-widget-model-haruto/assets/haruto.model.json",
    "../live2d-widget-model-hibiki/assets/hibiki.model.json",
    "../live2d-widget-model-hijiki/assets/hijiki.model.json",
    "../live2d-widget-model-koharu/assets/koharu.model.json",
    "../live2d-widget-model-nico/assets/nico.model.json",
    "../live2d-widget-model-wanko/assets/wanko.model.json",
    "../live2d-widget-model-unitychan/assets/unitychan.model.json",
    "../live2d-widget-model-tororo/assets/tororo.model.json",
    "../live2d-widget-model-nito/assets/nito.model.json",
    "../live2d-widget-model-nipsilon/assets/nipsilon.model.json"
];

// 随机选择一个模型
var randomModel = models[Math.floor(Math.random() *18)];

var randomHOffset = Math.random() < 0.5 ? Math.floor(Math.random() * (450 - 0 + 1)) + 0 : Math.floor(Math.random() * (1300 - 980 + 1)) + 980;

// 确保随机偏移量不会小于 0
randomHOffset = Math.max(randomHOffset, 0);

// 初始化 L2Dwidget
L2Dwidget.init({
  "model": {
        "jsonPath": randomModel
    },
    "display": {
        "position": "left",
        "width": 300,
        "height": 620,
        "hOffset": randomHOffset,
        "vOffset": -20
    },
    "mobile": {
        "show": true,
        "scale": 1
    },
    "react": {
        "opacityDefault": 1,
        "opacityOnHover": 1
    }
})