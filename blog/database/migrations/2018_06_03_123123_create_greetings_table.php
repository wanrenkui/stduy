<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class CreateGreetingsTable extends Migration{
    public function up(){
        Schema::create('greetings',function(Blueprint $table){
            $table->increments('id');
            $table->string('body');
            $table->timestamps();
        });
    }//创建数据库的文件，这些文件都可以使用artisan命令自动生成，内容自己填充

    public function down(){
        Schema::drop('greetings');
    }//销毁数据库时的操作
}
