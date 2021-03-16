//自动生成应用目录(controller、model和view目录以及common.php、middleware.php、event.php和provider.php等文件)
//指令：php think build admin
//app目录下增加一个build.php:
return [
'__file__'   => [],//需要自动创建的文件__dir__ 表示生成目录（支持多级目录）
'__dir__'    => ['controller', 'model', 'view'],//__file__ 表示生成文件（默认会生成common.php、middleware.php、event.php和provider.php文件，无需定义）
'controller' => ['Index'],// controller表示生成控制器类
'model'      => ['User'],// model表示生成模型类
'view'       => ['index/index'],//view表示生成模板文件（支持子目录）
];


//php think make:event UserLogin
//php think make:listener UserLogin
//php think make:subscribe  UserLogin

//php think make:controller index@Blog //生成index应用的Blog控制器类
//php think make:controller Blog //如果是单应用模式，则无需传入应用名。会生成一个资源控制器
//php think make:controller index@Blog --plain //生成普通控制器（只生成控制器，不生成方法）
//php think make:controller index@test/Blog --plain//生成多级控制器


//快速生成模型
//php think make:model index@UserModel //生成index应用的UserModel模型类库文件
//php think make:model UserModel       //如果是单应用模式，无需传入应用名

//生成带后缀的类库
//php think make:controller index@BlogController//生成带后缀的类库
//php think make:model UserModel

//生成中间件
//php think make:middleware Auth  //app\middleware\Auth 中间件类文件。

//创建验证器类
//php think make:validate admin@UserValidate   //创建验证器类(生成一个 app\admin\validate\UserValidate 验证器类，然后添加自己的验证规则和错误信息。)




//清除应用缓存文件clear
//php think clear //不带任何参数调用clear命令的话，会清除runtime目录（包括模板缓存、日志文件及其子目录）下面的所有的文件，但会保留目录。

//php think clear --dir                         //如果不需要保留空目录，可以使用
//php think clear --log                         //清除日志目录
//php think clear --log --dir                   //清除日志目录并删除空目录
//php think clear --cache                       //清除数据缓存目录
//php think clear --cache --dir                 //清除数据缓存目录并删除空目录
//php think clear --path d:\www\tp\runtime\log\ //如果需要清除某个指定目录下面的文件





//访问视图的时候报错：Driver [Think] not supported。需要安装：composer require topthink/think-view
