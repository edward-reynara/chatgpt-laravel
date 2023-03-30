<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Spatie\PdfToText\Pdf;

class ChatGPTController extends Controller
{
     public function chatPDF()
    {
        // $a =public_path();
        // return $a; 
        
        // $pdf_string = Pdf::getText('novel.pdf');

        // $text = (new Pdf(public_path()))
        // ->setPdf('novel.pdf')
        // ->text();
        
        $pdf_string = "PANGERAN PANDE GELANG DAN PUTRI CADASARI
        Asal cerita : Kabupaten Pandeglang, Banten
        Alkisah, di daerah Banten,
        ada seorang putri raja
        bernama Putri Arum.
        Wajahnya cantik nan
        rupawan. Kulit dan hatinya
        lembut selembut sutra. Tidak
        mengherankan jika banyak
        pangeran yang ingin
        menjadikannya sebagai
        permaisuri. Dari sekian
        banyak pangeran, tersebutlah dua orang pangeran yang ingin menjalin kasih
        dengan sang putri. Kedua pangeran tersebut adalah Pangeran Sae Bagus Lana
        dan Pangeran Cunihin. Mereka teman seperguruan, namun memiliki sifat yang
        berbeda. Sesuai dengan nama mereka, kata Sae Bagus Lana dalam bahasa
        Sunda berarti laki-laki yang baik hati, sedangkan Cunihin berarti laki-laki
        yang suka menggoda wanita. Mengetahui perawakan kedua pangeran
        tersebut, maka Putri Arum memilih Pangeran Sae Bagus Lana sebagai
        kekasihnya.
        Rupanya, Pangeran Cunihin tidak rela menerima kenyataan tersebut. Secara
        diam-diam, ia iri hati dan dendam terhadap Pangeran Sae Bagus Lana
        sehingga timbullah niatnya untuk mencuri ilmu dan kesaktian Pangeran Sae
        Bagus Lana agar dapat merebut Putri Arum. Alhasil, Pangeran Cunihin
        berhasil melaksanakan niatnya. Dengan kesaktian tersebut, ia kemudian
        mengubah wajah Pangeran Sae Bagus Lana menjadi seorang tua dan berkulit
        hitam legam.
        Sementara itu, Pangeran Sae Bagus Lana yang sudah tidak berdaya datang
        menghadap kepada gurunya untuk meminta petunjuk. Ia pun disarankan oleh
        gurunya untuk membuat sebuah gelang besar yang bisa dilewati manusia.
        Gelang itulah yang dapat mengalahkan Pangeran Cunihin. Jika Pangeran
        Cunihin melewati gelang tersebut maka seluruh kesaktiannya akan lenyap dan
        kembali kepada Pangeran Sae Bagus.
        Setelah mendengar nasehat sang guru, Pangeran Sae Bagus Lana pergi ke
        sebuah kampung untuk menjadi seorang pembuat gelang atau “pande gelang”
        tanpa sepengetahuan Putri Arum. Sejak itulah, ia pun dipanggil dengan nama
        Pande Gelang. Penduduk setempat akrab memanggilnya Ki Pande.
        16
        Suatu hari, ketika melintas di Bukit Manggis, Pande Gelang melihat seorang
        gadis cantik duduk termenung seorang diri. Rupanya, gadis itu tidak asing
        lagi baginya. Ia adalah Putri Arum yang sedang bersedih karena tidak ingin
        menikah dengan Pangeran Cunihin yang terkenal kejam dan bengis itu.
        Meskipun ia tahu kalau gadis itu kekasihnya, Pangeran Sae Bagus Lana tidak
        ingin membongkar penyamarannya agar sang kekasih tidak bertambah sedih.
        “Sampurasun!” sapa Pande Gelang.
        “Ra… rampes,” jawab sang putri dengan terkejut.
        “Maaf jika hamba telah mengejutkan Tuan Putri,” kata Pande Gelang seraya
        memberi hormat.
        Sang putri tidak segera menjawab. Ia hanya terpaku mengamati lelaki yang
        belum dikenalnya itu. Meskipun wajah lelaki yang berkulit legam itu tampak
        kusam, sang putri yakin bahwa orang itu berwatak baik. Ia mengumpamakan
        lelaki itu bagaikan buah manggis, walaupun hitam dan pahit kulitnya tetapi
        putih dan manis buahnya. Dengan keyakinan itu, sang putri tidak segan untuk
        menjawab sapaan lelaki setengah baya itu.
        “Maaf, Aki siapa dan berasal dari mana?” tanya sang putri.
        “Nama hamba Pande Gelang. Orang-orang memanggil hamba Ki Pande,”
        jawab lelaki itu. “Maaf Tuan Putri. Sekiranya hamba boleh tahu mengapa
        Tuan Putri tampak gundah gulana?” tanyanya.
        Sang putri kembali terdiam sambil meneteskan air mata. Ia ingin
        menceritakan kegundaan hatinya, namun sungguh berat untuk
        mengungkapkannya. Sang putri merasa bahwa tidak ada gunanya
        menceritakan masalah kepada orang lain karena tak seorang pun yang dapat
        membantunya.
        “Oh, maaf jika pertanyaan hamba tadi telah menyinggung perasaan Tuan
        Putri”, ucap Ki Pande seraya hendak berlalu.
        Ketika Pande Gelang akan meninggalkan tempat itu, sang putri mencegah
        langkahnya.
        “Tunggu, jangan pergi dulu Ki!” cegah Putri Arum. “Baiklah, Ki. Saya akan
        bercerita, tetapi sekadar untuk mengilangkan rasa penasaran Ki Pande.
        Selama ini saya tidak pernah menceritakan masalah ini kepada orang lain
        karena hanya akan sia-sia belaka,” kata sang putri.
        17
        “Mengapa Tuan Putri berkata demikian?” tanya Pande Gelang.
        “Masalah yang saya hadapi saat ini sangat berat Ki,” ungkap sang putri.
        Putri Arum kemudian bercerita bahwa dirinya sedang mendapat tekanan dari
        Pangeran Cunihin.
        “Saya sangat sedih Ki, karena Pangeran Cunihin memaksa saya untuk
        menjadi istrinya. Meskipun ia tampan, tetapi saya tidak menyukai wataknya
        yang bengis dan kejam. Namun, saya tidak berdaya untuk menghadapinya
        karena ia sangat berkuasa dan sakti mandraguna,” ungkap Putri Arum.
        Sejenak Pande Gelang tertegun. Hatinya sangat geram mendengar sikap dan
        perilaku Pangeran Cunihin yang semakin menjadi-jadi. Ia tidak sabar lagi
        ingin menghajar pangeran bengis itu. Meski demikian, ia tetap berusaha
        menyembunyikan amarah dan mencoba untuk menenangkan hati kekasihnya
        itu.
        “Hamba turut bersedih, Tuan Putri,” ucap Pande Gelang berlinang air mata.
        “Terima kasih Ki atas keprihatinannya. Tadinya saya mengira wangsit yang
        saya terima benar adanya,” ungkap Putri Arum.
        “Maaf, Tuan Putri. Wangsit apa yang Tuan Putri maksud?” tanya Pande
        Gelang.
        “Menurut wangsit yang saya terima melalui mimpi bahwa saya harus
        menenangkan diri di bukit ini. Kelak akan ada seorang pengeran yang baik
        hati dan sakti mandraguna yang datang menolong saya. Namun, harapan itu
        hampir sirna. Sudah sekian lama saya menanti kedatangan dewa penolong itu
        namun tak kunjung tiba. Padahal, tiga hari lagi Pangeran Cunihin akan
        datang untuk memaksa saya menikah dengannya,” keluh Putri Arum.
        Pande Gelang kembali tertegun. Ia menyadari bahwa dewa penolong yang
        dimaksud sang putri adalah dirinya.
        “Maaf, Tuan Putri. Kalau boleh hamba menyarankan, sebaiknya Tuan Putri
        mau menerima keinginan Pangeran Cunihin itu,” ujar Pande Gelang.
        Mulanya sang putri menolak saran itu karena bagaimana mungkin ia bisa
        menikah dengan Pangeran Cunihin yang sangat dibencinya itu. Namun,
        setelah lelaki itu menjelaskan bahwa sang putri tidak menerimanya begitu
        saja tetapi dengan syarat yang berat, akhirnya sang putri mau menerima
        saran itu. Syarat tersebut adalah Pangeran Cunihin harus melubangi batu
        18
        keramat hingga bisa dilalui manusia. Selain itu, batu keramat itu harus
        diletakkan di sekitar pantai sebelum dilubangi. Untuk menyelesaikan
        pekerjaan tersebut memerlukan waktu tiga hari. Dengan demikian, tentu saja
        setengah dari kesaktian Pangeran Cunihin akan hilang.
        “Lalu, bagaimana selanjutnya Ki?” tanya Putri Arum setelah mendengar
        pejelasan itu.
        “Tuan Putri tidak usah khawatir. Urusan selanjutnya serahkan kepada
        hamba,” ujar Pande Gelang.
        Mendengar seluruh penjelasan Pande Gelang, maka semakin yakinlah sang
        putri untuk menerima saran tersebut. Setelah itu, Pande Gelang kemudian
        mengajak Putri Arum ke tempat tinggalnya untuk mengatur siasat.
        Perjalanan menuju ke tempat tinggal Pande Gelang ternyata cukup jauh dan
        melelahkan sehingga membuat Putri Arum jatuh pingsan di atas sebuah batu
        cadas saat akan tiba di kampung Pande Gelang. Mengetahui hal itu,
        penduduk kampung segera membantu Pande Gelang membawa Putri Arum ke
        salah satu rumah penduduk yang terdekat. Mereka pun merawat sang putri
        dengan penuh kasih sayang. Menurut tetua kampung, sang putri akan segera
        pulih jika ia meminum air gunung yang memancar melalui batu cadas itu.
        Alhasil, setelah meminum air dari batu cadas tersebut, Putri Arum kembali
        sehat. Sejak itulah, penduduk kampung memanggil Putri Arum dengan
        sebutan Putri Cadasari. Setelah itu, sang putri segera mengatur siasat
        bersama Pande Gelang untuk mengelabui Pengeran Cunihin.
        Keesokan harinya, Putri Cadasari kembali ke istana dengan diantar oleh
        beberapa penduduk kampung. Sementara itu, Pande Gelang sibuk membuat
        sebuah gelang besar untuk dikalungkan pada batu keramat.
        Pada hari yang telah ditentukan, datanglah Pangeran Cunihin mengajak Putri
        Arum untuk menikah dengannya. Putri Arum pun mengajukan syarat
        sebagaimana yang disarankan oleh Pande Gelang.
        “Kamu boleh menikahiku, tapi dengan satu syarat kamu harus membawa
        batu cadas ke pantai lalu melubanginya,” jelas Putri Arum.
        “Ha, sungguh mudah syaratmu itu Tuan Putri. Tapi, apa maksud dari
        syaratmu itu?” tanya Pangeran Cunihin.
        “Batu keramat itu untuk bulan madu kita Pangeran. Kita bisa duduk di atas
        batu itu sambil menikmati indahnya pemandangan laut. Bukankah itu sangat
        menyenangkan Pangeran?” jelas Putri Cadasari.
        
        itu, tiba-tiba seluruh tubuhnya merasakan sakit yang luar biasa. Ia pun
        berteriak keras karena tidak kuat lagi menahan rasa sakit. Begitu ia selesai
        melewati lubang itu, seluruh kekuatannya hilang sehingga ia hanya bisa
        duduk lemas tak berdaya. Beberapa saat kemudian, ia pun berubah menjadi
        seorang tua renta seolah telah melewati lorong waktu yang begitu panjang.
        Pada saat yang bersamaan, Pande Gelang merasakan kekuatan yang luar
        biasa mengalir masuk ke dalam tubuhnya. Akhirnya, seluruh ilmu dan
        kesaktiannya kembali seperti semula. Wajahnya pun kembali seperti
        sediakala, yaitu wajah seorang pangeran yang tampan.
        Putri Cadasari seolah-olah tidak percaya menyaksikan peristiwa ajaib itu. Ia
        baru sadar bahwa ternyata lelaki paruh baya yang telah menolongnya itu
        adalah kekasihnya sendiri, Pangeran Sae Bagus Lana.
        “Akang, bagaimana semua ini bisa terjadi?” tanya Putri Cadasari dengan
        heran.
        Pangeran Pande Gelang pun menceritakan semua kejadian yang dialaminya
        mulai dari peristiwa Pangeran Cunihin mencuri kesaktiannya hingga peristiwa
        ajaib itu terjadi. Mendengar cerita itu, barulah sang putri sadar bahwa
        wangsit yang ia terima memang benar adanya. Akhirnya, mereka pun
        meninggalkan batu keramat itu. Beberapa waktu kemudian, mereka menikah
        dan hidup bahagia.";
        
        $command = '
        
       
        
        buat kesimpulan dari cerita diatas dalam bahasa indonesia';

        $prompt = $pdf_string . $command;
        $prompt2 = "Pangeran Pandegelang dan Putri Cadasari adalah sebuah cerita yang berasal dari Kabupaten Pandeglang, Banten. Cerita ini menceritakan tentang dua pangeran yang ingin menikahi Putri Arum, namun hanya Pangeran Sae Bagus Lana yang dipilih oleh sang putri. Pangeran Cunihin, yang tidak rela, akhirnya mencuri ilmu dan kesaktian Pangeran Sae Bagus Lana untuk merebut sang putri. \n\nDalam keputusasaannya, Pangeran Sae Bagus Lana meminta petunjuk dari gurunya dan membuat sebuah gelang besar yang bisa dilewati manusia. Gelang tersebut bisa mengalahkan Pangeran Cunihin jika melewati batasannya, sehingga kesaktiannya akan hilang. Pangeran Sae Bagus Lana kemudian pergi ke sebuah kampung dan menjadi \"pande gelang\" tanpa sepengetahuan Putri Arum. \n\nSuatu hari sang putri bertemu dengan Pande Gelang dan menceritakan masalahnya dengan Pangeran Cunihin. Pande Gelang memberikan saran agar Putri Arum menerima syarat Pangeran Cunihin, yaitu untuk membuat lubang pada batu cadas keramat yang hanya bisa dilewati orang. Setengah dari kesaktian Pangeran Cunihin akan hilang jika syarat itu terpenuhi. \n\nAkhirnya, Pangeran Cunihin menyetujui syarat Putri Arum karena merasa itu sangat mudah. Namun saat melewati lubang pada batu keramat itu, kesaktiannya lenyap dan ia berubah menjadi seorang tua. Sementara itu, Pande Gelang mendapatkan kembali kesaktiannya. Putri Cadasari pun menyadari bahwa Pande Gelang adalah Pangeran Sae Bagus Lana, kekasihnya. Mereka menikah dan hidup bahagia.\n\nKisah ini mengajarkan kita untuk selalu menjaga hati kita dari rasa iri dan dendam, serta untuk selalu berjuang untuk mendapat cinta yang sejati. Selain itu, cerita ini juga mengajarkan bahwa kebaikan dan usaha yang tulus akan selalu mendapat imbalan yang setimpal";
        $prompt3 = "translate to english";

        // $response = OpenAI::completions()->create([
        //     'model' => 'text-davinci-003',
        //     'prompt' => $prompt,
        // ]);
        
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
                // ['role' => 'assistant', 'content' => $prompt2],
                // ['role' => 'user', 'content' => $prompt3],
            ],
        ]);
        
        // $response->id; // 'chatcmpl-6pMyfj1HF4QXnfvjtfzvufZSQq6Eq'
        // $response->object; // 'chat.completion'
        // $response->created; // 1677701073
        // $response->model; // 'gpt-3.5-turbo-0301'
        
        // foreach ($response->choices as $result) {
        //     $result->index; // 0
        //     $result->message->role; // 'assistant'
        //     $result->message->content; // '\n\nHello there! How can I assist you today?'
        //     $result->finishReason; // 'stop'
        // }
        
        // $response->usage->promptTokens; // 9,
        // $response->usage->completionTokens; // 12,
        // $response->usage->totalTokens; // 21
        
        // $response->toArray(); // ['id' => 'chatcmpl-6pMyfj1HF4QXnfvjtfzvufZSQq6Eq', ...]

        $result = $response->toArray();
        $result = $response['choices'][0]['message']['content'];
        
        // $result = $response['choices'][0]['text'];
        // $result = $response->choices[0]->text;

        return  $result;
    }
}
