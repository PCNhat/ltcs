@extends('frontend.master')
@section('title','Khóa học')
<article id="course">
@section('main')
    <div class="container container-fix">
        <h1 class="title-post">Khóa học fullstack web developer</h1>
        <div class="body-post">
            <p>Khóa học cung cấp các kiến thức căn bản để học viên có thể đi làm được ở vị trí fullstack web developer. Học viên học được cách làm việc nhóm, giải quyết vấn đề, hiểu được quy trình, công cụ làm việc như trong thực tế.</p>
            <p>Nếu học viên đã học sơ qua về web, khóa học này là cơ hội để hệ thống hóa kiến thức, học lại một cách bài bản, bù các kiến thức bị thiếu. Bởi vì chỉ cần “một cuốn sách, một người thầy” là đủ.</p>
            <p>Khóa học dành cho các học viên có kiến thức lập trình căn bản, có thời gian, sẵn sàng đeo bám khóa học đến cùng :) Học cho đến lúc nào đi làm được thì thôi.</p>
            <p>Học viên có một người mentor bên cạnh, như một người bạn, sẵn sàng chia sẻ định hướng để phát triển bản thân trong ngành lập trình.</p>
            <p><img src={{url('images/lap-trinh-vien.png')}} alt="lap-trinh-vien"></p>
            <h2>Phương thức học:</h2>
            <p>Học trực tuyến trong một group bí mật trên facebook, yêu cầu học viên phải kết nối và xem live stream bài giảng, trao đổi trực tiếp với giảng viên.</p>
            <p>Mô hình giả lập môi trường làm việc trong thực tế. Học viên tương tác và làm việc với nhau như một development team trong thực tế với đủ các vị trí: developer, tester, technical leader.</p>
            <p>Học viên phải làm bài tập được giao một cách đầy đủ.</p>
            <h2>Thời gian học:</h2>
            <p>Mỗi tuần 3 buổi vào các tối thứ 2, thứ 4 và thứ 6, mỗi buổi khoảng 2 tiếng.</p>
            <p>Với lượng kiến thức cần truyền tải là rất lớn, tổng thời gian khóa học dự kiến là 7-8 tháng, thời gian này có thể bị kéo dài ra nếu học viên vẫn chưa tiếp thu đủ kiến thức.</p>
            <h2>Nội dung khóa học:</h2>
            <h3>1. Cơ bản về web:</h3>
            <p>Giới thiệu căn bản, web hoạt động như thế nào? Các kiến thức về http request, dns, domain, ajax, session, cookie, database…</p>
            <h3>2. Ngôn ngữ đánh dấu HTML</h3>
            <p>Học viên học tất tần tật về ngôn ngữ đánh dấu HTML, hiểu và sử dụng các thẻ HTML một cách thuần thục.</p>
            <h3>CSS</h3>
            <p>Học viên được cung cấp các kiến thức về CSS và đặc biệt là CSS3, hiểu về dựng layout web bằng CSS thuần, các kỹ thuật liên quan đến sass, responsive, media query, pseudo css, fault column, css animation…</p>
            <h3>4. Psd to html</h3>
            <p>Học viên sử dụng cơ bản được photoshop, tìm hiểu cách cắt giao diện được thiết kế từ photoshop sang html/css.</p>
            <h3>5. Javascript</h3>
            <p>Học javascript căn bản từ đầu, học viên hiểu về biến, hằng, vòng lặp, promise, callback, cách javascript tương tác với DOM document.</p>
            <h3>6. Jquery</h3>
            <p>Học viên làm chủ thư viện jquery, hiểu và ứng dụng jquery trong dự án thực tế. Hiểu về selector, fade, animate, event, ajax, plugin…</p>
            <h3>7. Vuejs</h3>
            <p>Học viên hiểu các kiến thức về javascript framework nói riêng và vuejs nói chung, có kiến thức về routing, props, components, style binding… có thể làm single page web app.</p>
            <h3>8. Bootstrap</h3>
            <p>Hướng dẫn học viên cài đặt và sử dụng bootstrap, các kiến thức bootstrap như: grid system, sử dụng các component, kết hợp css thuần để customize bootstrap dựng được giao diện web hoàn chỉnh.</p>
            <h3>9. Giới thiệu PHP và cài đặt các công cụ liên quan.</h3>
            <p>Giới thiệu cơ bản về ngôn ngữ lập trình PHP, giúp học viên cài đặt, hiểu và có thể sử dụng các công cụ phát triển web: stack, editor, php package manager, javascript package manager…</p>
            <h3>10. Lập trình PHP căn bản.</h3>
            <ul>
                <li>Kiến thức lập trình php căn bản bao gồm: biến, hằng số, vòng lặp, hàm, mảng, data type…</li>
                <li>Lập trình hướng đối tượng trong php: class, namespace, construtor, extends, instance, static methods, interface, abstract, trait…</li>
                <li>Các kiến thức khác của riêng php như: session, cookie, request param…</li>
            </ul>
            <h3>11. Database design.</h3>
            <p>Học viên học cách phân tích và thiết kế cơ sở dữ liệu quan hệ đáp ứng được yêu cầu bài toán đưa ra. Kiến thức về SQL cơ bản.</p>
            <h3>12. Lập trình laravel căn bản.</h3>
            <ul>
                <li>Giới thiệu về framework, giới thiệu về laravel.</li>
                <li>Cài đặt laravel.</li>
                <li>Giới thiệu cấu trúc thư mục, artisan.</li>
                <li>Application flow, routing, controller, model và view.</li>
                <li>Blade template, compiling assets.</li>
                <li>Sử dụng Vue framework trong laravel.</li>
                <li>Request và validation</li>
                <li>Eloquent ORM, Relationships.</li>
                <li>Migration, factory và seeder.</li>
                <li>Auth và middleware.</li>
            </ul>
            <h3>13.Tổng kết khóa học.</h3>
            <p>Hệ thống hóa lại toàn bộ kiến thức đã học. Đánh giá lại trình độ học viên, bồi dưỡng thêm cho các học viên chưa đạt yêu cầu.</p>
            <h2>Yêu cầu với học viên:</h2>
            <p>Với lượng kiến thức cần truyền tải là rất lớn, để tham gia khóa học, học viên cần đạt các yêu cầu sau:</p>
            <ul>
                <li>Tham gia đầy đủ các buổi học, hoàn thành tốt bài tập được giao.</li>
                <li>Có kiến thức lập trình căn bản.</li>
                <li>Mong muốn nâng cao trình độ, mong muốn hiểu về cách làm việc trong thực tế.</li>
                <li>Ham học hỏi, tinh thần học nữa học mãi, đeo bám khóa học đến lúc nào đi làm được thì thôi.</li>
                <li>Tôn trọng giảng viên, bạn bè. Trong khóa học, sẽ không phải là mình khi live stream tám chuyện với các bạn nữa, mình sẽ là người hướng dẫn các bạn, mong các bạn coi mình như một người bạn, người thầy.</li>
            </ul>
            <h2>Một số câu hỏi thường gặp:</h2>
            <h3>Tại sao phải học trên live stream?</h3>
            <p>Có rất nhiều khóa học khác trên internet, nhưng hầu hết các khóa học này là học bằng video, học viên xem một list video để học, tuy nhiên điều này làm cho học viên học lướt, xem lướt mà chưa hiểu vấn đề, không có một khoảng break cần thiết để tư duy. Thông qua khóa học này, mình muốn cùng đồng hành với học viên, cùng học viên học từ đầu đi hết chặng đường.</p>
            <h3>Nếu không sắp xếp để online đúng giờ học live stream thì sao?</h3>
            <p>Các buổi live stream đều có video để học viên xem lại bất kỳ lúc nào, tuy nhiên vẫn khuyến khích học viên tham gia đầy đủ các buổi học live stream trực tiếp để đạt hiệu quả cao nhất.</p>
            <h3>Học xong rồi thì sao?</h3>
            <p>Thường mỗi khóa mình sẽ chọn ra vài bạn học khá nhất để giới thiệu thực tập hoặc làm việc tại các công ty mà mình quen biết. Cũng tùy từng đợt mà có số lượng tuyển nhiều hoặc không.</p>
            <h2>Giá khóa học: 3 triệu đồng</h2>
            <p>Để hoàn tất quá trình đăng ký khóa học, các bạn thực hiện:</p>
            <ul>
                <li>B1: Chuyển khoản học phí vào số tài khoản: 03801010806511 - Ngân hàng Maritime bank, chi nhánh Hà Nội, chủ tài khoản: Bùi Văn Nguyện. Nội dung chuyển khoản ghi: “Fullstack + nick facebook”</li>
                <li>B2: Gửi yêu cầu tham gia vào <a href="">group facebook của lớp học</a></li>
                <li>B3: <a href="">Chat với chúng tôi tại đây</a> để được thêm vào lớp.</li>
            </ul>
            <p>Hẹn gặp bạn trong khóa học Fullstack web developer của Lập Trình Cuộc Sống.</p>
            <p>Bạn cũng có thể yêu cầu để học thử vài buổi, nếu thấy chất lượng tốt thì mới đóng học phí để theo học. Nếu có bất kỳ thắc mắc nào, hãy <a href="">Chat với chúng tôi tại đây</a></p>
            <h2>Hẹn gặp bạn trong khóa học</h2>
        </div>
    </div>
</article>
@stop