<?php

use App\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exercise::add([
            'exercise_name' => 'Lat Pull-Downs',
            'explanation' => 'Sırt kaslarını geliştirmek amaçlı Lat pulldown  makinesinde ağırlığı yukarıdan aşağı çekmek suretiyle yapılan bir egzersizdir.
            Vücut ağırlığı kullanarak yapılan ve en iyi sırt egzersizi dediğimiz Barfiks egzersizinden farkı ise; Lat pulldown makinesinnin ağırlıkları ayarlanabilir olduğundan, egzersiz sırt kasını izole (sadece bir kasa odaklanmak) bir şekilde çalıştırabilir, eklemlere de ekstra bir yük binmediği için sakatlanma olasılığı yoktur.',
            'region' => 'Back',
            'image_link' => 'https://cdn-ami-drupal.heartyhosting.com/sites/muscleandfitness.com/files/styles/desktop_responsivecustom_user_desktop_1x/public/flex/behind-the-neck-lat-pulldown-back.jpg?itok=FpnnM1m7&timestamp=1485197584'
        ]);

        Exercise::add([
            'exercise_name' => 'Seated Rows',
            'explanation' => 'Cable row makinesinde, V-bar, Single grip handle (tek el tutamaç), Rope (halat) ve Wide bar ekipmanlarının yardımıyla, ağırlığı yere paralel bir şekilde çekerek yapılan bir sırt egzersizidir.
            Birden çok ekipman kullanılabildiğinden sırt kaslarını farklı şekillerde izole edilebilir ve maksimum verimle çalıştırılabilir.
            Seated Cable row hareketini sağlam bir sırt görünümü için mutlaka yapmanız gerekmektedir. Makinede uygulandığı için sakatlanma riski neredeyse yoktur.',
            'region' => 'Back',
            'image_link' => 'https://unleashyouroptimalhealth.files.wordpress.com/2015/10/seated-row-1.png'
        ]);

        Exercise::add([
            'exercise_name' => 'One-Arm Dumbbell Rows',
            'explanation' => 'Düz bir bench’in üzerine bir dizimizi ve bir elimizi koyup, üst vücudu yere paralel hale getirip, tek kol ile ağırlığı aşağıdan yukarıya çekmek suretiyle yaptığımız bir SIRT egzersizidir.
            Sırt kasları sağ ve sol olarak izole edilerek yapıldığından yüksek ağırlıklara girilebilir. Egzersiz sonunda güzel bir pump etkisi sağlayacaktır. Sırt antrenmanın sonlarına doğru eklenebilir.',
            'region' => 'Back',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/one-arm-dumbbell-row.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Preacher Curl',
            'explanation' => 'Bu hareket Larry Scoot tarafından bulunmuştur. Kapalı tutuş ve açık tutuş curl yapmak için oldukça elverişlidir. Hem düz hem de ez-bar kullanılabilir.
            »Preacher Curl standına oturarak sehpaya kollarınızı yaslayın ve barı normal tutuşla kavrayın.
            Nefes alın ve ardından nefes vererek barı kontrollü bir şekilde kollarınız yere dik oluncaya kadar kaldırın. Bunu yaparken üst kolunuz (omuz ve dirsek arası) sabit kalmalı.
            Tepe noktaya ulaştığınızda 1 saniye kadar bekleyin ve nefes alarak yavaşça barı aşağı indirin.
            Set sayısı kadar yapıp hareketi tamamlayın.',
            'region' => 'Biceps',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/PREACHER-CURLS-2.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Curls',
            'explanation' => 'Biceps curl vücut ağırlığını kullanarak yapılabilen bir egzersiz değil. Bu nedenle de uygun ağırlıkta 2’li dambıl seti, hafif ağırlıkta bir bar, plates bandı ya da direnç lastiği gibi spor ekipmanları kullanmanız gerekir. Plates bandı ve direnç lastiği başlangıç seviyesinde olanlar için daha doğru bir tercih olmakla beraber, hareketi zorlanmadan yapmaya başladığınız ilerleyen seviyelerde dambıl kullanımına geçiş yapabilirsiniz.Biceps curl hareketinin doğru duruş pozisyonunda dirsekler vücudun yanında, gövde düz, sırt dimdik ve kollar tamamen gergin olmalıdır. Plates lastiğini ya da direnç lastiğini ortalayıp, iki ayağın altına aldıktan sonra lastiği iki elde gergin vaziyette tutmak gerekiyor.Hareketi tamamlarken kollarınızı indirdiğinizde başlangıç pozisyonuna geri dönmeniz gerekir. Özellikle bitiş aşamasında öne eğilmemeli, sırt dik durmalıdır.',
            'region' => 'Biceps',
            'image_link' => 'https://www.mensjournal.com/wp-content/uploads/mf/hammer_cheat_curl_main.jpg?w=660'
        ]);

        Exercise::add([
            'exercise_name' => 'Hammer Curl',
            'explanation' => 'Dumbbell’ların yere dik tutularak kaldırılmasıyla yapılan bir kol egzersizidir. İki ayrı tutuş şekli vardır.
            Birincisi; ön kollar vücuda dik ve tam olarak karşıya bakar. Bu pozisyonda Biceps kası (pazu) ve Brachioradialis ön kol kasını aynı anda ve eşit oranda çalışır.
            İkincisi; ön kollar vücuda kapalı halde (sürtünecek kadar kapalı değil. biraz açık olacak) durur.
            Bu pozisyonda ise Brachioradialis ön kol kası maksimum derecede çalışır. Bu pozisyonun ismi de Cross Body Hammer Curl‘dür.',
            'region' => 'Biceps',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/hammer-curl-dik-tutus-pozisyon.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Bench Presses',
            'explanation' => 'Bench press egzersizi; Düz bench sehpasına yatarak, barbell’i göğüs hizasından yukarı doğru itmek suretiyle yapılan oldukça etkili bir göğüs kası geliştirme egzersizidir.
            Aynı anda üç kas grubunu çalıştırır.
            Bunlar;
            Pectoralis major (Göğüs)
            Deltoid anterior part (Ön omuz)
            Triceps Brachii (Arka kol)
            kaslarıdır.',
            'region' => 'Chest',
            'image_link' => 'https://blogbodyforumtr.mncdn.com/wp-content/uploads/2018/03/bench-press_0.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Dumbbell Flys',
            'explanation' => 'Hareketi yapmanıza  engel olmayacak  ağırlıkta ki dumbelları  her iki elinize birer adet alarak benche sırt üstü uzanın.
            Dumbbell’ar  göğüs hizanızda, kollarınız dik ve avuç içleriniz birbirine bakar şekilde olacak. Bu başlangıç pozisyonunuz.
            Nefes alarak dumbell’ları omuz hizasının biraz altına gelene kadar her iki yana dengeli olarak indirin.
            Nefes vererek, dirseklerinizin açısını değiştirmeden aynı şekilde dumbbell’ları yukarı kaldırın.
            Hareketin sonunda bir saniye kadar  göğüs kasını iyice kasarak izometrik çalışma yapın.',
            'region' => 'Chest',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/01/dumbbell-fly.png'
        ]);

        Exercise::add([
            'exercise_name' => 'Butterfly',
            'explanation' => 'Kendine özel makinesinde oturarak, kolları yere paralel şekilde ve açık haldeyken, makinenin ağırlıklarına karşı direnç gösterip, kapatmak suretiyle yapılan bir göğüs egzersizidir.Makine, ağırlığı egzersiz boyunca stabil halde verdiği için ağırlığa direnç göstermek daha kolaydır. Yüksek tekrarlar elde edilebilir. Genelde göğüs programında son sırada pump etkisi almak için kullanılır.',
            'region' => 'Chest',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/PEC-DECK-FLYS.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Leg Extensions',
            'explanation' => 'Leg extension egzersizi; leg extension machine de oturarak yapılan, makinenin ayak ağırlık pedlerini kullanarak, alt bacağı (diz ve ayak arası) üst bacağa (diz ve kalça arası) dik pozisyondan, üst bacağa paralel hale getirerek yapılan bir üst bacak egzersizidir.
            Oturarak yapıldığından diğer tüm kasları devre dışı bırakır ve mükemmel bir şekilde ön bacak kaslarını izole halde çalıştırır.',
            'region' => 'Legs',
            'image_link' => 'https://personaltrainer.istanbul/wp-content/uploads/2018/10/Leg-Extension.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Dumbbell Lunges',
            'explanation' => 'Her iki elinize de uygun ağırlıkta birer dumbbell alın. Dumbbell’lar vücudunuza çarpmaması için avuç içleriniz resimdeki gibi vücuda dönük olsun.
            Bu egzersizde nefes kontrolü tekrar sayısı açısından büyük önem taşımakta. İniş anında nefes alıp, kalkış anında nefes vereceksiniz.
            Nefes alın ve öne doğru bir adım atarak geride kalan ayağınızla dizinizin üstüne çökmeye başlayın.
            Diziniz yere temas etmemeli. Temas etmesi işimizi ne kadar kolaylaştırsa da aslında hareketten çalmamıza neden oluyor. Bu nedenle bunu yapmayın. Zaman kaybından başka bir şey değil.
            Dizinizin üzerine çöktükten sonra nefes vererek kalkmaya başlayın ve geride kalan ayağınızı, ileride ki ayağınızın bir adım önüne atın. Ve tekrar nefes alarak çökmeye başlayın.',
            'region' => 'Legs',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2017/05/dumbell-lunges.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Leg Curl',
            'explanation' => 'Kendi makinesinde yüz üstü yatar şekilde, arka bacağı makinenin pedlerini yaslayıp kaldırarak yapılan bir arka bacak egzersizidir.
            Squat egzersizinin tüm bacak kaslarını çalıştırdığını biliyoruz fakat yeterli ağırlık kaldırılmadığında Hamstrings yani arka bacak kasları tam olarak çalışmayabiliyor ya da ön bacak kaslarından geride kaldığı oluyor.',
            'region' => 'Legs',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/Lying-Leg-Curl.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Seated Dumbbell Presses',
            'explanation' => 'Derecesi ayarlanabilir bench sehpasını tam dik konuma getirin. Oturduğunuzda belinizin sehpaya tam olarak yaslandığından emin olun. Bu şekilde sakatlanmalardan korunmuş olursunuz.
            Her iki elinize birer dumbbell alın. Dumbbell’ı yerden alırken önce dizlerinize oradan diz ile iktirip kafa hizanıza kadar kaldırabilirsiniz. Yüksek ağırlıklar kullanırken diz ile dumbbell’a vereceğiniz ivme başlangıç pozisyonuna geçmenizi kolaylaştıracaktır. Her iki elinize aldığınız dumbbell’ı kafa ile boyun arasında bir hizada tutun. Bu başlangıç pozisyonunuz olacak. Nefes alın ve dumbbellar’ı kuvvetlice yukarı doğru itin. Dumbbellar’ın birbirine değmesine bir kaç cm kadar mesafe kalmalı. Tepe noktaya ulaştıktan sonra nefes vererek, kaldırış hızınıza oranlar daha yavaş bir hızla başlangıç pozisyonunuza doğru indirin. Bir saniye kadar bekleyip tekrar kaldırın.',
            'region' => 'Shoulders',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/dumbell-shoulder-press.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Lateral Raises',
            'explanation' => 'Ayaklarınız hafif açık olarak her iki elinize birer dumbbell alınız. Avuç içleriniz vücudunuza dönük olacak. Bu başlangıç pozisyonunuz.
            Nefes alarak kollarınızı kırmadan  omuz hizanıza kadar, kollarınız yere paralel oluncaya dek kaldırın. (Kolları kırarak yapıldığında harekete tam anlamıyla konsantre olunamıyor. Dünyaca ünlü Bodybuilder’lar düşük ağırlıklarla sık tekrarlar yapmakta ve yüksek ağırlığa girmenin eklemler ve kas gelişimi açısından riskin büyük olduğunu söylüyorlar.)
            Tepe noktaya ulaştığınız da nefes vererek kaldırış hızınıza göre daha yavaş bir hızda dumbbell’ları indirin.
            Tekrar sayısı kadar yapıp setinizi tamamlayın.',
            'region' => 'Shoulders',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/dumbbell-lateral-raise.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Front Raises',
            'explanation' => 'Üstten tutuşla her iki elinize çok ağır olmayan iki dumbbell alın. Serbest vücut salınımından ve belinize yük binmesinden sakınmak için ayaklarınızı omuz genişliği kadar açık tutabilirsiniz.
            Nefes alın ve sırasıyla bir sağ bir sol elinizi omuz yüksekliğine kadar yukarı kaldırın. Bunu yaparken dumbbelleri tam olarak yere paralel olarak tuttuğunuza ve kollarınızın tam karşıya baktığından emin olmalısınız. Çünkü hareketin en konsantre hali bu şekilde yapılır. Dumbelleri dik olarak tutmak sadece Deltoideus antreior part (ön omuz) kasını çalıştırır.  Yere paralel olarak tutmak ise tüm omuz kaslarınızı çalıştıracaktır.
            Kollarınızı aşağı indirirken kaldırma hızınıza göre daha yavaş bir hız uygulayın. Böylece indirirken de bir dirence maruz kalacağınız için, kaslar kaldırma anında ki gibi  indirme anında da yırtılmaya (gelişmeye) devam ederler. Buna hareketin negatifinden faydalanmak diyoruz.',
            'region' => 'Shoulders',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/dumbbell-front-raise.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Push Downs',
            'explanation' => 'Makineye uygun ağırlık ve triceps bar takılır. Makara gurubu en yükseğe kaldırılır. Eller arasında yaklaşık 20 cm mesafe kalacak şekilde ve avuç içleri aşağı bakacak pozisyonda bar kavranır.
            Omuz ve dirsek arası yani üst kol yere dik ve vücuda mümkün olduğu kadar bitişik şekilde tutulur. Dirsek ve el arası da yere paralel ya da biraz daha yukarıda duracak şekle getirilir. Bu başlangıç pozisyonudur.
            İki çeşit ayak duruşu vardır. Birincisi : Bir ayak ileride ve vücut yükü onun üzerinde, diğer ayak biraz arkada ve parmak ucu yere basık topuk biraz kalkık, bel biraz eğik ve göğüs biraz ileride. İkincisi: Ayaklar aynı hizada ve yere tam basık, bel düz, göğüs biraz ileride.
            Bir ayağın önde olduğu pozisyon hareketi kolaylaştırır ve daha konsantre yapmanızı sağlar. Ayakların aynı hizada olduğu pozisyon ise  kasta ki gerçek yanmayı hissettirir ama hareketi yapması daha zordur. Her iki sitilinde kendine göre avantajları vardır.
            Nefes vererek barı orta hızda aşağı doğru kollarınız yere dik olana kadar itin.
            Ardından nefes alarak yavaş – orta hız arası  bir aralıkta başlangıç pozisyonuna dönün.',
            'region' => 'Triceps',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/01/triceps-pushdown.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'Triceps Extensions',
            'explanation' => 'Bir bench’in üzerine oturun. Dengeyi sağlamak amaçlı ayaklarınızı açın. Uygun ağırlıkta bir dumbbel’ı her iki elinizle sıkıca kavrayıp başınızın arkasına alın. Bu başlangıç pozisyonunuz olacak.
            Dirsekleriniz ne çok açık ne de çok kapalı bir pozisyonda olsun. Nefes alın ve triceps’lerinize odaklanarak dumbbell’ı yukarı doğru itin.
            Tepe noktasına geldiğiniz de kaldırış hızınıza oranla biraz daha yavaş bir hızla, nefes vererek aşşağıya doğru kontrollü bir şekilde indirin.',
            'region' => 'Triceps',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/seated-triceps-dumbbell-extension.jpg'
        ]);

        Exercise::add([
            'exercise_name' => 'One Arm Dumbbell Triceps Extensions',
            'explanation' => 'Oturarak, tek  kol ve tek dumbbell ile yapılan triceps – arka kol egzersizidir.
            Triceps egzersizleri genelde ağırlığı yukarıdan aşağı (makara yardımıyla) çekmek suretiyle yapılır ve makara ağırlığı daima stabil olarak verdiği için gerçek bir zorlanma ile karşı karşıya kalmazsınız.',
            'region' => 'Triceps',
            'image_link' => 'https://www.fitnessandbeast.com/wp-content/uploads/2016/02/Seated-One-Arm-Dumbbell-Triceps-Extension-1.jpg'
        ]);
    }
}
