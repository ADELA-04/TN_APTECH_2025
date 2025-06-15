<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog_posts')->insert([
            [
                'Title' => 'Thời trang xinh yêu đón nắng hè 2025',
                'Content' => '<p>M&ugrave;a thời trang Xu&acirc;n H&egrave; 2025 đ&aacute;nh dấu sự chuyển dịch thấy r&otilde; cho nhiều xu hướng quen thuộc.</p>',
                'Summary' => 'Tóm tắt bài viết đầu tiên.',
                'ImageURL' => 'assets/images3/1747037626_20250301_mtnHkRBIg1.jpg',

                'AuthorID' => 5, // ID của tác giả trong bảng Users
                'views' => 0, // Thêm trường views
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Title' => 'Đón Làn Gió Mới Với 10 Xu Hướng Thời Trang Xuân Hè 2025',
                'Content' => '<h2 style="font-style:normal"><strong>1. Ch&acirc;n v&aacute;y phồng được &ldquo;lăng x&ecirc;&rdquo; tr&ecirc;n c&aacute;c s&agrave;n diễn</strong></h2>',
                'Summary' => 'Xu hướng thời trang Xuân Hè 2025 trên các sàn diễn chứng kiến sự chiếm lĩnh của mẫu chân váy phồng đầy cuốn hút. Tất cả những thiết kế mang dáng vẻ bồng bềnh đều được các nhà mốt chú trọng, khéo léo kết hợp với áo crop-top, áo sơ mi cách điệu, tạo nên những bộ trang phục độc đáo.',
                'ImageURL' => 'assets/images3/1747038009_20250320_sHMUJejlQ2.jpg',

                'AuthorID' => 6, // ID của tác giả trong bảng Users
                'views' => 0, // Thêm trường views
                'created_at' => now(),
                'updated_at' => now(),
            ],
    [
                'Title' => 'Cẩm Nang Chọn Chân Váy Dài Hoàn Hảo Theo Dáng Người',
                'Content' => '<p>D&aacute;ng quả l&ecirc; với đặc điểm phần h&ocirc;ng v&agrave; đ&ugrave;i rộng hơn vai v&agrave; ngực cần những kiểu v&aacute;y tạo c&acirc;n bằng v&agrave; kh&ocirc;ng thu h&uacute;t th&ecirc;m sự ch&uacute; &yacute; v&agrave;o phần h&ocirc;ng.</p>',
                'Summary' => 'Xu hướng thời trang Xuân Hè 2025 trên các sàn diễn chứng kiến sự chiếm lĩnh của mẫu chân váy phồng đầy cuốn hút. Tất cả những thiết kế mang dáng vẻ bồng bềnh đều được các nhà mốt chú trọng, khéo léo kết hợp với áo crop-top, áo sơ mi cách điệu, tạo nên những bộ trang phục độc đáo.',
                'ImageURL' => 'assets/images3/1747303924_20250228_SRQJXikg8C.jpg',
                'IsVisible' => true,
                'AuthorID' => 6, // ID của tác giả trong bảng Users
                'views' => 0, // Thêm trường views
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
