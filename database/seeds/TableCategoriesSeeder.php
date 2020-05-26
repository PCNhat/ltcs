<?php

use Illuminate\Database\Seeder;

class TableCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['cate_name'=>'Video trên Youtube','cate_des'=>'Các video chia sẻ về lập trình, đời sống lập trình viên trên Lập Trình Viên TV, kênh youtube chính thức của Lập trình cuộc sống chấm com','mode'=>1],
            ['cate_name'=>'Chuyện nghề nghiệp','cate_des'=>'Chuyện nghề nghiệp - là chuyên mục nơi một thằng coder viết về những buồn vui, khó khăn, trăn trở trong nghề lập trình.','mode'=>0],
            ['cate_name'=>'Chuyện lập trình','cate_des'=>'Chuyện lập trình - là chuyên mục mà một thằng coder viết về các vấn đề liên quan đến kỹ thuật, lập trình, những gì hắn đã học được trong quá trình cày cuốc của mình.','mode'=>0],
            ['cate_name'=>'Chuyện bên lề','cate_des'=>'Chuyện bên lề - là chuyên mục viết về mọi thứ liên quan đến cuộc sống của một thằng coder.','mode'=>0],
            ['cate_name'=>'Chuyện cuộc sống','cate_des'=>'Những buồn vui trong cuộc sống của lập trình viên và những người làm trong ngành công nghệ.','mode'=>0],
            ['cate_name'=>'Linux - Ubuntu','cate_des'=>'Linux - ubuntu là chuyên mục mà một thằng coder viết về hệ điều hành hắn yêu thích, chia sẻ mọi thứ hắn biết về ubuntu và linux.','mode'=>0],
        ];
        DB::table('categories')->insert($data);
    }
}
