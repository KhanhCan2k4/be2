<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("products")->insert(
            [
                'id' => 1,
                'name' => 'Apple iPhone 14 Pro Max',
                'price' => 264.5,
                'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>iPhone 14 Pro Max. Bắt trọn chi tiết ấn tượng với Camera Chính 48MP. Trải nghiệm iPhone theo cách hoàn toàn mới với Dynamic Island và màn hình Luôn Bật. Công nghệ an toàn quan trọng – Phát Hiện Va Chạm<sup>1</sup> thay bạn gọi trợ giúp khi cần kíp</p><h3>Tính năng nổi bật</h3><ul><li>Màn hình Super Retina XDR 6,7 inch<sup>2</sup> với tính năng Luôn Bật và ProMotion</li><li>Dynamic Island, một cách mới tuyệt diệu để tương tác với iPhone</li><li>Camera Chính 48MP cho độ phân giải gấp 4 lần</li><li>Chế độ Điện Ảnh nay đã hỗ trợ 4K Dolby Vision tốc độ lên đến 30 fps</li><li>Chế độ Hành Động để quay video cầm tay mượt mà, ổn định</li><li>Công nghệ an toàn quan trọng – Phát Hiện Va Chạm<sup>1</sup> thay bạn gọi trợ giúp khi cần kíp </li><li>Thời lượng pin cả ngày và thời gian xem video lên đến 29 giờ<sup>3</sup></li><li>A16 Bionic, chip điện thoại thông minh tuyệt đỉnh. Mạng di động 5G siêu nhanh<sup>4</sup></li><li>Các tính năng về độ bền dẫn đầu như Ceramic Shield và khả năng chống nước<sup>5</sup></li><li>iOS 16 đem đến thêm nhiều cách để cá nhân hóa, giao tiếp và chia sẻ<sup>6</sup></li></ul><h3>Pháp lý</h3><p><sup>1</sup>SOS Khẩn Cấp sử dụng kết nối mạng di động hoặc Cuộc Gọi Wi-Fi.<br><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình theo đường chéo là 6,69 inch. Diện tích hiển thị thực tế nhỏ hơn. <br><sup>3</sup>Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình; truy cập apple.com/batteries để biết thêm thông tin.<br><sup>4</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. Để biết thông tin về hỗ trợ mạng 5G, vui lòng liên hệ nhà mạng và truy cập apple.com/iphone/cellular.<br><sup>5</sup>iPhone 14 Pro Max có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng. <br><sup>6</sup>Một số tính năng không khả dụng tại một số quốc gia hoặc khu vực.</p><h3>Thông số kỹ thuật </h3><p>Truy cập <a href="apple.com/iphone/compare" rel="nofollow noreferrer">apple.com/iphone/compare</a></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
                'image' => 'iphone14promax.jpg',
            ]
        );

        DB::table("products")->insert(
            [
                'id' => 2,
                'name' => 'Apple iPhone 13',
                'price' => 1609.0,
                'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>iPhone 13. Hệ thống camera kép tiên tiến nhất từng có trên iPhone. Chip A15 Bionic thần tốc. Bước nhảy vọt về thời lượng pin. Thiết kế bền bỉ. Mạng 5G siêu nhanh.<sup>1</sup> Cùng với màn hình Super Retina XDR sáng hơn.</p><h3>Tính năng nổi bật</h3><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li><li>Chế độ Điện Ảnh làm tăng thêm độ sâu trường ảnh nông và tự động thay đổi tiêu cự trong video</li><li>Hệ thống camera kép tiên tiến với camera Wide và Ultra Wide 12MP; Phong Cách Nhiếp Ảnh, HDR thông minh thế hệ 4, chế độ Ban Đêm, khả năng quay video HDR Dolby Vision 4K</li><li>Camera trước TrueDepth 12MP với chế độ Ban Đêm và khả năng quay video HDR Dolby Vision 4K</li><li>Chip A15 Bionic cho hiệu năng thần tốc</li><li>Thời gian xem video lên đến 19 giờ<sup>3</sup></li><li>Thiết kế bền bỉ với Ceramic Shield</li><li>Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường<sup>4</sup></li><li>Mạng 5G cho tốc độ tải xuống siêu nhanh, xem video và nghe nhạc trực tuyến chất lượng cao<sup>1</sup></li><li>iOS 15 tích hợp nhiều tính năng mới cho phép bạn làm được nhiều việc hơn bao giờ hết với iPhone<sup>5</sup></li><li>Hỗ trợ phụ kiện MagSafe giúp dễ dàng gắn kết và sạc không dây nhanh hơn<sup>6</sup></li></ul><h3>Pháp lý</h3><p><sup>1</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. Để biết thông tin về hỗ trợ mạng 5G, vui lòng liên hệ nhà mạng và truy cập <a href="http://apple.com/iphone/cellular" rel="nofollow noreferrer">apple.com/iphone/cellular</a></p><p><sup>2</sup>Màn hình có các góc bo tròn theo đường cong tuyệt đẹp và nằm gọn theo một hình chữ nhật chuẩn. Khi tính theo hình chữ nhật chuẩn, kích thước màn hình là 6.06 inch theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn.</p><p><sup>3</sup>Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập <a href="http://apple.com/batteries" rel="nofollow noreferrer">apple.com/batteries</a> để biết thêm thông tin.</p><p><sup>4</sup>iPhone 13 có khả năng chống nước, chống tia nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529. Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.</p><p><sup>5</sup>Một số tính năng không khả dụng tại một số quốc gia hoặc khu vực.</p><p><sup>6</sup>Phụ kiện được bán riêng.</p><h3>Thông số kỹ thuật</h3><p>Truy cập <a href="https://www.apple.com/iphone/compare/" rel="nofollow noreferrer">apple.com/iphone/compare</a> để xem cấu hình đầy đủ.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
                'image' => 'iphone13.jpg',
            ]
        );

        DB::table("products")->insert(
            [
                'id' => 3,
                'name' => 'Apple iPhone 14 Pro',
                'price' => 2399.0,
                'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>iPhone 14 Pro. Bắt trọn chi tiết ấn tượng với Camera Chính 48MP. Trải nghiệm iPhone theo cách hoàn toàn mới với Dynamic Island và màn hình Luôn Bật. Phát Hiện Va Chạm,<sup>1</sup>&nbsp;một tính năng an toàn mới, thay bạn gọi trợ giúp khi cần kíp.</p><h3>Tính năng nổi bật</h3><ul><li>Màn hình Super Retina XDR 6,1 inch<sup>2</sup>&nbsp;với tính năng Luôn Bật và ProMotion</li><li>Dynamic Island, một cách mới tuyệt diệu để tương tác với iPhone</li><li>Camera Chính 48MP cho độ phân giải gấp 4 lần</li><li>Chế độ Điện Ảnh nay đã hỗ trợ 4K Dolby Vision tốc độ lên đến 30 fps</li><li>Chế độ Hành Động để quay video cầm tay mượt mà, ổn định</li><li>Công nghệ an toàn quan trọng – Phát Hiện Va Chạm1 thay bạn gọi trợ giúp khi cần kíp</li><li>Thời lượng pin cả ngày và thời gian xem video lên đến 23 giờ<sup>3</sup></li><li>A16 Bionic, chip điện thoại thông minh tuyệt đỉnh. Mạng di động 5G siêu nhanh<sup>4</sup></li><li>Các tính năng về độ bền dẫn đầu như Ceramic Shield và khả năng chống nước<sup>5</sup></li><li>iOS 16 đem đến thêm nhiều cách để cá nhân hóa, giao tiếp và chia sẻ<sup>6</sup></li></ul><h3>Pháp lý</h3><p><sup>1</sup>SOS Khẩn Cấp sử dụng kết nối mạng di động hoặc Cuộc Gọi Wi-Fi.<br><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình theo đường chéo là 6,12 inch.<br>Diện tích hiển thị thực tế nhỏ hơn.<br><sup>3</sup>Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình; truy cập apple.com/batteries để biết thêm thông tin.<br><sup>4</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. Để biết thông tin về hỗ trợ mạng 5G, vui lòng liên hệ nhà mạng và truy cập apple.com/iphone/cellular.<br><sup>5</sup>iPhone 14 Pro có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.<br><sup>6</sup>Một số tính năng không khả dụng tại một số quốc gia hoặc khu vực.</p><h3>Thông số kỹ thuật</h3><p>Truy cập&nbsp;<a href="apple.com/iphone/compare" rel="nofollow noreferrer">apple.com/iphone/compare</a></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
                'image' => 'iphone14pro.jpg',
            ]
        );

        DB::table('categories')->insert(
            [
                'id' => 1,
                'name' => 'Apple'
            ]
        );

        DB::table('categories')->insert(
            [
                'id' => 2,
                'name' => 'Samsung'
            ]
        );

        DB::table('categories')->insert(
            [
                'id' => 3,
                'name' => 'Điện thoại'
            ]
        );

        DB::table('categories')->insert(
            [
                'id' => 4,
                'name' => 'Tablet'
            ]
        );

        DB::table('categories')->insert(
            [
                'id' => 5,
                'name' => 'Macbook'
            ]
        );

        DB::table('categories')->insert(
            [
                'id' => 6,
                'name' => 'Laptop'
            ]
        );

        DB::table('categories')->insert(
            [
                'id' => 7,
                'name' => 'Phụ kiện'
            ]
        );

        DB::table('category_product')->insert(
            [
                'category_id' => 1,
                'product_id' => 1
            ]
        );

        DB::table('category_product')->insert(
            [
                'category_id' => 1,
                'product_id' => 2
            ]
        );

        DB::table('category_product')->insert(
            [
                'category_id' => 7,
                'product_id' => 2
            ]
        );

    }

}