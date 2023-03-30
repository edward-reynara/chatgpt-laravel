<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $pdf_string = "PERJUANGAN SANG ANAK DESA
        Aku seorang lelaki yang sudah dewasa, awal perjuanganku adalah ketika aku berpikir
        untuk melanjutkan pendidikanku di bangku SMA, kehidupan keluargaku sangat
        sederhana hal ini yang membuatku untuk berjuang bangkit dari kesederhanaan itu agar
        nantinya melalui perjuangan ini, akan menjadi salah satu kebanggaan besar dari keluargaku.
        Berpikir sekolah kadang menjadi sebuah pergumulan besar, hingga suatu waktu,
        kedatangan mama kecilku membawa cahaya baru bagi anganku.
        Dibangku SMA aku dibiayai oleh mama kecilku, sehingga menjadi sebuah rutinitas
        tak kenal waktu, keseharianku kulimpahkan untuk membantunya. Mungkin dengan cara
        sedehana ini yang akan membangkitkan semangatnya untuk terus membiayaiku bersekolah
        Ketika pulang dari sekolah, aku harus bekerja di tempat usaha mama kecilku, sebuah
        toko kecil berisikan keperluan sehari-hari, hingga sore barulah aku diijinkan untuk kembali
        ke rumah. Hal itu aku lakukan setiap hari sejak aku dibangku SMA.
        Tak ada masa bagiku untuk duduk nongkrong seperti anak-anak seusiaku, berkumpul
        dengan teman sebaya, bercerita, berjalan-jalan, berbagi pengalaman, ataupun hal hal apa saja
        yang berkaitan dengan laki-laki seusiaku. Tempatku hanyalah sebuah toko kecil, sering
        berbicara dengan harga, melayani pelanggan yang kadang membosankan, terigu, beras,
        mantega, dan masih banyak lainnya yang menjadi sahabat curhatku. Tak ada pilihan lain
        karna jika tidak demikian maka impianku untuk bersekolah bisa sirna.
        Berbicara cinta memang semua orang pasti memiliki kisahnya masing-masing,
        akupun memilikinya. Kisah cintaku dimulai ketika aku beranjak kuliah, memang waktu
        masih SMA aku pernah mencintai seorang perempuan cantik di desaku, seorang perempuan
        manis, wajah yang ayu diselimuti dengan senyuman yang indah, rambutnya terurai di bawah
        pundaknya membuat kecantikannya semakin sempurna. Komunikasi kami tak seperti yang
        sering anak anak seusiaku lakukan, berjakan bersama, bergandengan tangan, makan bersama
        di kantin sekolah, ditraktir ataupun mentraktir dan masih banyak lainnya. Sebuah alat
        komunikasi kecil yang aku pegang itulah yang menjadi sarana percintaan kami, berbagi pesan
        via alat komunikasi itu sudahlah cukup untuk mengubur rasa cintaku, membaca balasannya
        sudah menjadi kebahagiaan besarku, belum lagi jika mendengar suaranya, seakan aku sedang
        diterbangkan dalam rindu, dan bertemu di awan-awan, memang lembut suaranya ketika
        berbicara membawa suasana cinta itu terasa, dan bahagia bisa dinikmati.
        Dia bersekolah pula di sekolahku, namun untuk bertemu seakan ada tembok besar
        yang menutupi langkahku, karna memang aku tak bisa berkata-kata jika bertemu, seperti
        biasa yang kuberi hanyalah senyuman khasku, dan itu sudah menjadi bahagiaku. Yahhh,
        bahagia terbesarku saling berbalas senyum.
        Waktu berlalu begitu cepat, penghujung impianku sudah nampak, mungkin ini akan
        menjadi sebuah kisah yang tak akan aku lupakan. Melepaskan cinta untuk mencari
        kebahagiaan, karena aku sadar jika untuk melanjutkan pendidikan yang lebih tinggi akan
        terasa susah bagiku, sedangkan dia, dia masih memiliki impian yang harus diraih, kerelaan ini
        haruslah menjadi pilihan bagiku dan bagi kebahagiaan bersama. Memang cinta tak selamanya
        harus menyatu. Sejak aku mendengar kelulusanku, pikiranku sudah mulai hadir untuk pergi
        jauh mencari kehidupan yang lebih layak. Seperti merantau mungkin itu kata kerennya.
        Pertemuan terakhirku di sudut kelas itu, tempat yang biasanya kami berpapasan
        dengan senyuman, ketika senyuman saling menyapa memberi keindahan tersendiri. Dan kali
        ini tempat itulah yang akan menjadi saksi pula bahwa senyum itu akan berakhir dan mungkin
        untuk selamanya.
        Kudekati dia dan kucoba untuk lebih dahulu membuka percakapan, “kita sudah
        megakhiri perjuangan setelah tiga tahun” sebuah perjuangan yang panjang, lanjutku. Dan
        hari ini, aku ingin memberikan sebuah kalimat yang memang akut tak ingin katakana, namun
        harus aku katakan karena memang kita memiliki perbedaan. Aku akan pergi dan mungkin tak
        bisa untuk kembali lagi, aku ingin pergi mencari kehidupan yang lebih layak, ukan untuk
        melanjutkan kuliah, tapi mingkin untuk kerja, walau belum aku tahu apa yang akan aku
        kerjakan kelak. Tak seberapa yang aku ucapkan, terasa suara ini semkin tak bisa untuk aku
        berkata lagi, terlinang air mata di pipinya yang indah itu, sambil tertunduk entah apa yang ia
        pikirkan, mungkin kesedihan mendalam ketika aku mengungkapkankata perpisahan, atau
        mungkin ia berpikir jika kepergianku akan membawa duka yang mendalam di batinnya.
        Aku memang tak bisa untuk tidak mengungkapkan akan hal ini, karena bagiku, tak
        bisa untuk terus bertahan jika yang aku rasakan adalah hidup dibawah kekurangan dan
        kesederhanaan, bagaimana aku bisa membahagiakannya kelak? . Masa depannya masih
        sangat panjang, dan mungkin aku lelaki yang tak pantas untuk dicintai oleh dia yang
        memiliki segalanya. Hal hal inilah yang membuatku untuk secepatnya mengungkapkan apa
        yang telah aku pikirkan sebelumnya.
        Beberapa bulan kemudian sejak pertemuan itu, aku berusaha untuk melupakan dia,
        melupakan cinta ini, dan segala yang berkaitan dengan rindu dan harapan. Dan terakhir aku
        mendengarnya, dia telah pergi jauh untuk melanjutkan akan pendidikannnya.
        Akupun telah pergi jauh untuk mencari kehidupan. Sebuah lembaran baru dalam
        kehidupanku mulai ku ukirkan. Namun, tak seperti yang aku harapkan, tak seperti yang aku
        pikirkan, kejenuhan demi kejenuhan mulai aku rasakan, semenjak hari pertama aku
        menginjakan kaki di tanah rantauan, hingga disuatu hari aku berpikir untuk kembali. Tak
        sampai setengah tahun aku berada di tanah rantauan akhirnya kuputuskan untuk
        menghubungi orang tuaku. Dan dengan cepat urangtuaku mengirimkanku ongkos untuk
        emninggalkan tanah rantauan. Memang kasih sayang sosok orangtua tak pernah lepas dari
        diriku. Gambaran penuh kesabaran dari mereka membuatku harus lebih berpikir untuk
        membahagiakan mereka.
        Semenjak kepulanganku, beberapa bulan aku berada di kampung halamanku, kembali
        aku bekerja di tempat yang menampungku untuk bersekolah waktu itu.
        Sambil memikirkan apa yang akan aku lakukan kedeapan, setiap sore ketika aku
        kembali ddari tempat kerjaku, selalu orangtuaku menasihati saya untuk melanjutkan
        pendidikan saya, ada beberapa hal yang aku inginkan ketika nantinya harus berkulia, memilih
        jurusan yagn aku inginkan, dan memilih jurusan yang orangtua inginkan,
        Dua pilihan yang membuatku untuk berpikir dan mengambil keputusan. Orantuaku
        menginginkanku untuk memilih jurusan yang nantinya bisa cepat kerja, dan hal itu memang
        diambil orangtuaku karena mungkin mereka berpikir bahwa aku harus menjadi pribadi yang
        nantina membanggakan keluarkaku kelak. Dikampungku, berpikir menjadi guru memang
        suatu hal yang sangat diidam-idamkan oleh hamper seluruh masyarakat desa, mungkin bagi
        mereka sebuah pekerjaan yang sangat mulia, atau entah apa yang mereka pikirkan.
        Dan akhirnya aku memutuskan untuk mengikuti apa yang dikatakan oleh orangtuaku,
        berbekal ijasah SMA aku mencoba meninggalkan keharmonisan keluargaku untuk pergi jauh
        meneruskan pendidikanku. Di kota provinsi tempat yang paling tepat untuk melanjutkan
        pendidikanku. Karena memang hanya ada di kotalah pendidikan bisa untuk didapati.
        Perbincangan malam terakhir di kampungku membuahkan hasil. Melanjutkan pendidikan
        mungkin hal yang tepat untuk mengangkat derajat keluargaku. Sehingga tak ada pilihan lain
        yaa,,,, memang tak ada pilihan lain.
        Hari berlalu begitu cepat beberapa minggu kemudian sejak pertemuan malam itu
        akhirnya aku harus bertolak ke kota provinsi. Rasanya tak ingin berpisah dengan keluarga
        kecilku yang telah membesarkan aku dengan penuh sabar, namun disamping itu, aku juga
        berpikir jika ada beban keluarga yang aku pikul saat ini, penguatan dan pesan malam itu
        membuat aku semakin yakin untuk melanjutkan perjuangan ini dengan lebih giat lagi.
        Hari ini, matahari begitu menyengat ketika menyentuh ubun-ubunku padahal waktu
        masih menunjukan pukul Sembilan lewat beberapa menit. Jelang beberapa saat, aku akan
        meninggalkan tempat kelahiranku, ayah dan beberapa kakakku sudah sibung mengurus
        keberangkatanku, disamping kesibukan mereka, masih saja mereka menyisipkan pesan-pesan
        pendek padaku. Sebuah kover kecil dan beberapa gardus menumpuk di depan rumahku, tas
        kecil yang akan menempel di pundakku diisi dengan bekal perjalanan. Mungkin mereka buat
        agar ketika dalam perjalanan dan perutku meminta untuk diisi,tak perlu aku membuang uang
        untuk membeli lagi.
        Ibuku masih duduk di pojok rumah sejak pagi tadi. Mungkin apa yang ia sedang
        pikirkan, tapi aku tak ingin mengganggunya, pikirku waktu keberangkatan barulah aku
        mendekat dan meminta pamit sekaligus bingkisan doa darinya. Kulirik dibalik kain pintu,
        ibuku sedang menatap jauh. Sesekali tangan kanannya menyapu keningnya, “ahh ibuku
        menangis lagi” pikirku. “bagaimana aku harus pergi, karna bagiku, hal hal seperti ini akan
        membuat langkah kakiku terasa berat uttuk meninggalkan halaman rumah ini.
        Ibu, aku tak bisa melangkah keluar jika kesedihan masih aku lihat, aku segera
        bergegas menuju kamarku dan langsung duduk di pinggir kasurku dan meneteskan air mata.
        Namun aku tak ingin mereka melihatku bersedih.. jelang beberapa menit suara meanggilku
        dari depan rumah.";
        
        $command = '
        
        
        buat kesimpulan dari cerita diatas dalam bahasa indonesia';

        $prompt = $pdf_string. "" . $command;
        // return $prompt;
        $prompt2 = "Suggest three names for an animal that is a superhero.

        Animal: Cat
        Names: Captain Sharpclaw, Agent Fluffball, The Incredible Feline
        Animal: Dog
        Names: Ruff the Protector, Wonder Canine, Sir Barks-a-Lot
        Animal: Duck
        Names:";

        // $result = OpenAI::completions()->create([
        //     'model' => 'gpt-3.5-turbo',
        //     'prompt' => $prompt,
        // ]);

        // // return $result['choices'][0]['text'];
        // // return $result->choices[0]->text;
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);
        
        $response->id; // 'chatcmpl-6pMyfj1HF4QXnfvjtfzvufZSQq6Eq'
        $response->object; // 'chat.completion'
        $response->created; // 1677701073
        $response->model; // 'gpt-3.5-turbo-0301'
        
        foreach ($response->choices as $result) {
            $result->index; // 0
            $result->message->role; // 'assistant'
            $result->message->content; // '\n\nHello there! How can I assist you today?'
            $result->finishReason; // 'stop'
        }
        
        $response->usage->promptTokens; // 9,
        $response->usage->completionTokens; // 12,
        $response->usage->totalTokens; // 21
        
        $response->toArray(); // ['id' => 'chatcmpl-6pMyfj1HF4QXnfvjtfzvufZSQq6Eq', ...]

        $data = $response->toArray();

        return  $data;
    }
}
