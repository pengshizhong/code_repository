require.config({
    paths: {
        jquery: 'jquery',
        test  : 'test',
    }
});
 
require(['jquery'], function($) {
    alert($().jquery);
});

define("test",[],function() {
    //这个方法会在导入的时候回调
    alert("import test");
    return {
        test : function (data) {
            alert("现在你在调用test模块的test方法\n你传入的data是" + data);
        }
    }
});

test = require(["test"], function(heh) {
    //这个方法的参数就是require的模块
    heh.test('data');
});

