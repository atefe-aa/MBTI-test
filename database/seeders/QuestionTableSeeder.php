<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws Exception
     */
    public function run(): void
    {
        $questions = [
            'آیا شناختن شما'=>['آسان است ؟'=>['score'=> 1 ,'type' => 'E'],'دشوار است ؟'=>['score'=> 2 ,'type' => 'I']],
            ' آیا'=>['با هر کسی تا حدی که لازم میدانید به راحتی صحبت میکنید؟'=>['score'=> 2 ,'type' => 'E'],'فقط با افراد خاصی آن هم در شرایط خاصی میتوانید زیاد صحبت کنید؟'=>['score'=> 2 ,'type' => 'I']],
            'شما معمولا'=>['زود جوش هستید؟'=>['score'=> 1 ,'type' => 'I'],'آرام و درون گرا هستید؟'=>['score'=> 1 ,'type' => 'E']],
            'روابط دوستانه شما'=>['با افرادی معدود ولی عمیق است؟'=>['score'=> 2 ,'type' => 'E'],'با تعداد بسیاری از افراد ولی سطحی است؟'=>['score'=> 0 ,'type' => 'I']],
            'میتوانید به طور نامحدود'=>['فقط با کسانی که علایق مشترکی با شما دارند صحبت کنید؟'=>['score'=> 1 ,'type' => 'I'],'میتوانید تقریبا با هر کسی صحبت کنید؟'=>['score'=> 1 ,'type' => 'E']],
            'در صحبت کردن با دوستانتان'=>['گاهی مسائل شخصی را به طور خصوصی به آنان میگویید؟'=>['score'=> 1 ,'type' => 'I'],'تقریبا هرگز چیزی را که نمی خواهید بگویید بیان نمیکنید؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا معمولا '=>['آزادانه احساسات خود را نشان میدهید؟'=>['score'=> 1 ,'type' => 'E'],'احساسات خود را نشان نمیدهید؟'=>['score'=> 1 ,'type' => 'I']],
            'وقتی غریبه ها به شما توجه می کنند'=>['احساس ناراحتی میکنید؟'=>['score'=> 1 ,'type' => 'I'],'اصلا ناراحت نمیشوید؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا عادت دارید'=>['به هیچ کس اعتماد نکنید یا حداکثر به یک نفر اعتماد کنید؟'=>['score'=> 1 ,'type' => 'I'],'تعدادی دوست دارید که به آنها اعتماد میکنید؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا '=>['فکر میکنید همه ی کسانی را که دوست دارید میدانند که دوستشان دارید؟'=>['score'=> 1 ,'type' => 'I'],'به بعضی افراد علاقهمند هستید بی آنکه بگذارید آنها بدانند؟'=>['score'=> 1 ,'type' => 'E']],
            'وقتی با گروهی از افراد هستید معمولا ترجیح میدهید؟'=>['به صحبت گروهی بپردازید؟'=>['score'=> 1 ,'type' => 'E'],'هر بار فقط با یک فرد صحبت کنید؟'=>['score'=> 1 ,'type' => 'I']],
            'در بین دوستانتان آیا'=>['یکی از آخرین کسانی هستید که خبرها را میشنوید؟'=>['score'=> 1 ,'type' => 'I'],'همه نوع خبری در مورد هر کسی دارید؟'=>['score'=> 1 ,'type' => 'E']],
            'در یک محفل اجتماعی'=>['سعی میکنید کسی را که دوست دارید با او صحبت کنید به گوش های بکشید؟'=>['score'=> 1 ,'type' => 'I'],'با گروه میجوشید؟'=>['score'=> 1 ,'type' => 'E']],
            'در میهمانیها'=>['گاهی کسل میشوید؟'=>['score'=> 1 ,'type' => 'E'],'همیشه به شما خوش میگذرد؟'=>['score'=> 1 ,'type' => 'I']],
            'کدام  لغت برای شما جالبتر است؟'=>['صحبت کردن'=>['score'=> 1 ,'type' => 'I'],'نوشتن'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت  برای شما جالبتر است؟'=>['آرام'=>['score'=> 1 , 'type' => 'E'], 'سرزنده'=>['score'=> 1 , 'type' => 'I']],
            'کدام لغت برای  شما جالبتر است؟'=>['ساکت'=>['score'=> 1 ,'type' => 'I'],'پر حرف'=>['score'=> 1 ,'type' => 'E']],
            'در یک مهمانی دوست دارید:'=>['کاری کنید که مراسم به خوبی برگزار شود ؟'=>['score'=> 1 ,'type' => 'E'],'میگذارید هر کسی به میل خودش خوش بگذراند؟'=>['score'=> 1 ,'type' => 'E']],
            'هنگامی که با گروهی از دوستان نزدیک خودتان هستید:'=>['بیشتر از بقیه صحبت میکنید؟'=>['score'=> 1 ,'type' => 'E'],'کمتر از بقیه ؟'=>['score'=> 1 ,'type' => 'E']],
            'در یک گروه بزرگ اغلب:'=>['دیگران را معرفی میکنید؟'=>['score'=> 1 ,'type' => 'E'],'معرفی میشوید؟'=>['score'=> 1 ,'type' => 'E']],
            'زمانی که در مورد یک پیشامد فکر میکنید ترجیح میدهید:'=>['در این مورد با شخصی صحبت کنید؟'=>['score'=> 1 ,'type' => 'E'],'در مورد آن خوب فکر میکنید؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا افرادی که تازه با شما آشنا می شوند میتوانند بگویند به چه علاقه دارید؟'=>['خیلی سریع'=>['score'=> 1 ,'type' => 'E'],'تنها پس از آنکه شما را خوب شناختند'=>['score'=> 1 ,'type' => 'E']],
            'آیا معمولا منظورتان'=>['بیشتر از آنچه میگویید میباشد؟'=>['score'=> 1 ,'type' => 'E'],'کمتر از آنچه میگویید است؟'=>['score'=> 1 ,'type' => 'E']],
            'وقتی که غریبهها را ملاقات می کنید'=>['برایتان خوشایند یا دست کم راحت است؟'=>['score'=> 1 ,'type' => 'E'],'زحمت زیادی برایتان دارد؟'=>['score'=> 1 ,'type' => 'E']],
            'وقتی در جلسه ای راجع به چیزی نظری دارید که باید گفته شود'=>['آن را مطرح میکنید؟'=>['score'=> 1 ,'type' => 'E'],'در مورد گفتن آن تردید دارید؟'=>['score'=> 1 ,'type' => 'E']],

            'ترجیح میدهید در نظر مردم چگونه باشید؟'=>['فردی اهل عمل؟'=>['score'=> 1 ,'type' => 'E'],'فردی مبتکر و خلاق؟'=>['score'=> 1 ,'type' => 'E']],
            'هنگام مطالعه با هدف سرگرم شدن آیا'=>['از شیوه ی بیان عجیب و ابتکاری مطالب لذت می برید؟'=>['score'=> 1 ,'type' => 'E'],'نویسندگانی را دوست دارید که به روشنی منظور خود را میرسانید؟'=>['score'=> 1 ,'type' => 'E']],
            'اگر معلم بودید ترجیح میدادید'=>['واقعیتها را تدریس کنید؟'=>['score'=> 1 ,'type' => 'E'],'نظری هها را شرح دهید؟'=>['score'=> 1 ,'type' => 'E']],
            'معمولا با کدام شخص راحت تر ارتباط برقرار میکنید؟'=>['با فردی تخیلی؟'=>['score'=>1,'type'=>'E'],'با فردی واقع بین؟'=>['score'=> 1 ,'type' => 'E']],
            'در انجام کاری که بسیاری از مردم انجام میدهند ترجیح میدهید'=>['آن را به شیوه ی پذیرفته شده انجام دهید؟'=>['score'=> 1 ,'type' => 'E'],'روش خاص خود را برای انجام آن ابداع کنید؟'=>['score'=> 1 ,'type' => 'E']],
            'درشیوه ی زندگی تان ترجیح می دهید'=>['متفاوت باشید؟'=>['score'=> 1 ,'type' => 'E'],'متعارف عمل کنید؟'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالب تر  است؟'=>['عبارت'=>['score'=> 1 ,'type' => 'E'],'مفهو م'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر  است؟'=>['ساختن'=>['score'=> 1 ,'type' => 'E'],'اختراع کردن'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر است ؟'=>['واقعی'=>['score'=> 1 ,'type' => 'E'],'انتزاعی'=>['score'=> 1 ,'type' => 'E']],
            ' کدام لغت برای شما جالبتر است؟'=>['حروفی'=>['score'=> 1 ,'type' => 'E'],'ارقامی'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر است  ؟'=>['تولید'=>['score'=> 1 ,'type' => 'E'],'طراحی'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر است؟ '=>['علامت'=>['score'=> 1 ,'type' => 'E'],'نماد'=>['score'=> 1 ,'type' => 'E']],
            '  کدام لغت برای شما جالبتر است؟'=>['پذیرش'=>['score'=> 1 ,'type' => 'E'],'تغییر'=>['score'=> 1 ,'type' => 'E']],
            '   کدام لغت برای شما جالبتر است؟'=>['شناخته شده'=>['score'=> 1 ,'type' => 'E'],'ناشناخته'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر است؟  '=>['واقعیتها'=>['score'=> 1 ,'type' => 'E'],'ایدهها'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر است؟   '=>['زیربنا'=>['score'=> 1 ,'type' => 'E'],'روبنا'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالب تر است؟'=>['نظریه'=>['score'=> 1 ,'type' => 'E'],'تجربه'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما  جالبتر است؟'=>['مایع'=>['score'=> 1 ,'type' => 'E'],'جامد'=>['score'=> 1 ,'type' => 'E']],
            'کدام یک تمجید بیشتری از یک فرد است؟'=>['بصیرت دارد ؟'=>['score'=> 1 ,'type' => 'E'],'عقل سلیم دارد؟'=>['score'=> 1 ,'type' => 'E']],


            'اگر بخواهید در همسایگی خود برای مسائلی مانند کمک به کمیته امداد به جمع آوری اعانه بپردازید'=>['درخواست شما خلاصه و تجاری است؟'=>['score'=> 1 ,'type' => 'E'],'دوستانه و اجتماعی است؟'=>['score'=> 1 ,'type' => 'E']],
            'کدام گزاره تعریف و تمجید بیشتری از شما به شمار میآید؟'=>['شخصی با احساسات واقعی؟'=>['score'=> 1 ,'type' => 'E'],'شخصی همیشه منطقی؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا در تصمیم گیری، بیشتر'=>['قلبتان بر عقلتان غلبه دارد؟'=>['score'=> 1 ,'type' => 'E'],'عقلتان بر قلبتان؟'=>['score'=> 1 ,'type' => 'E']],
            'هنگام گفتگو بیشتر تمایل دارید'=>['تمجید کنید؟'=>['score'=> 1 ,'type' => 'E'],'سرزنش کنید؟'=>['score'=> 1 ,'type' => 'E']],
            'احساس میکنید که کدام یک عیب بدتری به شمار میآید؟'=>['همدردی نکردن؟'=>['score'=> 1 ,'type' => 'E'],'استدلال پذیر نبودن؟'=>['score'=> 1 ,'type' => 'E']],
            'اگر بخواهید عمل خاصی را انجام دهید کدام یک از این دو گزاره برایتان جالب تر بنظر میآید؟'=>['مردم خیلی دوست دارند که شما آن را انجام دهید؟'=>['score'=> 1 ,'type' => 'E'],'این منطقی ترین کاری است که انجام میدهید؟'=>['score'=> 1 ,'type' => 'E']],
            'فکر میکنید وجود کدام یک در فرد نقص بیشتری است ؟'=>['خیلی احساساتی بودن؟'=>['score'=> 1 ,'type' => 'E'],'به اندازه کافی احساساتی نبودن؟'=>['score'=> 1 ,'type' => 'E']],
            'احساس میکنید کدام یک عیب بدتری به شمار میآید؟'=>['گرمی زیاد نشان دادن؟'=>['score'=> 1 ,'type' => 'E'],'به اندازه کافی گرم نبودن؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا معمولا'=>['برای احساس بیشتر از منطق ارزش قائل هستید؟'=>['score'=> 1 ,'type' => 'E'],'برای منطق بیشتر از احساس ؟'=>['score'=> 1 ,'type' => 'E']],
            '.کدام لغت برای شما جالبتر است؟'=>['متقاعد کردن'=>['score'=> 1 ,'type' => 'E'],'لمس کردن'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر است؟.'=>['موافقت کردن'=>['score'=> 1 ,'type' => 'E'],'پرسیدن'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما,  جالبتر است؟'=>['مزایا'=>['score'=> 1 ,'type' => 'E'],'برکت'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت,  برای شما جالبتر است؟'=>['تحلیل کردن'=>['score'=> 1 ,'type' => 'E'],'همدردی'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت  برای, شما جالبتر است؟'=>['نرم'=>['score'=> 1 ,'type' => 'E'],'سخت'=>['score'=> 1 ,'type' => 'E']],
            'کدام  لغت برای شما, جالبتر است؟'=>['پایبند به اندیشه خود'=>['score'=> 1 ,'type' => 'E'],'دلگرم'=>['score'=> 1 ,'type' => 'E']],
            ' کدام لغت برای شما, جالبتر است؟'=>['چه کسی؟'=>['score'=> 1 ,'type' => 'E'],'چه چیزی؟'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما, جالب تر است؟'=>['محتاط'=>['score'=> 1 ,'type' => 'E'],'خوش خیال'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما, جالبتر  است؟'=>['ملایم'=>['score'=> 1 ,'type' => 'E'],'محکم'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما, جالبتر است ؟'=>['عدالت'=>['score'=> 1 ,'type' => 'E'],'بخشندگی'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر است?؟'=>['غیر انتقادی'=>['score'=> 1 ,'type' => 'E'],'انتقادی'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر است؟؟'=>['متفکر'=>['score'=> 1 ,'type' => 'E'],'احساسی'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر است؟'=>['دلسوزی'=>['score'=> 1 ,'type' => 'E'],'دوراندیشی'=>['score'=> 1 ,'type' => 'E']],
            'بیشتر مراقب کدام یک هستید؟'=>['احساسات افراد؟'=>['score'=> 1 ,'type' => 'E'],'حقوق افراد؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا به طور طبیعی:'=>['به مردم بیشتر از اشیاء علاقه مندید؟'=>['score'=> 1 ,'type' => 'E'],'به اشیاء و نحوه کار آنها بیشتر از روابط انسانها علاقه مندید؟'=>['score'=> 1 ,'type' => 'E']],


            'برای انجام یک کار، آیا'=>['آن را زود شروع میکنید بطوریکه پس از پایان کار وقت اضافی داشته باشید؟'=>['score'=> 1 ,'type' => 'E'],'آن را به لحظه آخر واگذار کرده و سعی میکنید هر چه سریعتر انجام دهید؟'=>['score'=> 1 ,'type' => 'E']],
            'هنگامی که رخدادی پیش بینی نشده شما را مجبور به کنار گذاشتن برنامه روزانهتان مینماید'=>['آیا بوجود آمدن وقفه در برنامهتان را مزاحمت تلقی مینمایید؟'=>['score'=> 1 ,'type' => 'E'],'با تغییر وضعیت بوجود آمده با خوشرویی برخورد میکنید؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا مطابق برنامه عمل کردن'=>['مورد رضایت شماست؟'=>['score'=> 1 ,'type' => 'E'],'شما را در تنگنا قرار می دهد؟'=>['score'=> 1 ,'type' => 'E']],
            'هنگام شروع یک پروژه ی بزرگ که تا یک هفته باید انجام شود'=>['زمانی را برای تهیه فهرستی از کارهایی که میبایست انجام شوند بر اساس اولویت در نظر میگیرید؟'=>['score'=> 1 ,'type' => 'E'],'دل به دریا می زنید و شروع می کنید؟'=>['score'=> 1 ,'type' => 'E']],
            'اگر قرار باشد که کاری خاص را از پیش در زمانی خاص انجام دهید'=>['طبق برنامه عمل کردن برای شما خوشایند است؟'=>['score'=> 1 ,'type' => 'E'],'از در چهار چوب قرار گرفتن احساس ناخوشایندی میکنید؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا ترجیح میدهید'=>['قرار ملاقاتها، وعدهها و میهمانی ها را از پیش تعیین کنید؟'=>['score'=> 1 ,'type' => 'E'],'فردی باشید که در لحظه آخر بتوانید آزادانه آنجایی را که تمایل دارید انتخاب کنید؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا'=>['ترجیح میدهید کارها را در دقیقه آخر انجام دهید؟'=>['score'=> 1 ,'type' => 'E'],'انجام دادن کارها در دقیقه آخر شما را عصبی میکند؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا فکر میکنید که داشتن یک برنامه روزانه'=>['راحت ترین روش برای دادن کارهاست؟'=>['score'=> 1 ,'type' => 'E'],'حتی اگر ضروری باشد رنج آور است؟'=>['score'=> 1 ,'type' => 'E']],
            'وقتی که کار خاصی برای انجام دادن دارید آیا مایلید'=>['پیش از آغاز کار، با دقت آن را سازماندهی کنید؟'=>['score'=> 1 ,'type' => 'E'],'آنچه ضروری است را حین انجام کار متوجه شوید؟'=>['score'=> 1 ,'type' => 'E']],
            ':آیا'=>['روزمره بودن برایتان سادهتر است؟'=>['score'=> 1 ,'type' => 'E'],'متنوع بودن ؟'=>['score'=> 1 ,'type' => 'E']],
            'در زندگی شخصی وقتی به پایان مسئولیتی میرسید'=>['آیا می دانید کار بعدی چیست و آماده درگیر شدن با آن هستید؟'=>['score'=> 1 ,'type' => 'E'],'تا پیشامد بعدی از آرامش خود خوشنود هستید ؟'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما, جالبتر است؟'=>['وقت شناس'=>['score'=> 1 ,'type' => 'E'],'بی دغدغه'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای, شما جالبتر است؟'=>['منضبط'=>['score'=> 1 ,'type' => 'E'],'آسان گیر'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت, برای شما جالبتر است؟'=>['منظم'=>['score'=> 1 ,'type' => 'E'],'خودمانی'=>['score'=> 1 ,'type' => 'E']],
            'کدام لغت برای شما جالبتر, است؟'=>['برنامه ریز'=>['score'=> 1 ,'type' => 'E'],'بی برنامه'=>['score'=> 1 ,'type' => 'E']],
            'آیا به طور کلی ترجیح میدهید:'=>['برای دیدار کسی از قبل برنامه ریزی کنید؟'=>['score'=> 1 ,'type' => 'E'],'آزاد باشید و لحظهای عمل کنید؟'=>['score'=> 1 ,'type' => 'E']],
            'وقتی برای یک روز جایی میروید ، آیا ترجیح می دهید:'=>['برای اینکه چه کاری و چه موقع انجام دهید برنامه ریزی کنید؟'=>['score'=> 1 ,'type' => 'E'],'فقط میروید؟'=>['score'=> 1 ,'type' => 'E']],
            'در مورد کارهای روز مره ترجیح میدهید'=>['ابتدای صبح همه کارها را انجام دهید؟'=>['score'=> 1 ,'type' => 'E'],'در ضمن فرصت پیش آمده حین انجام کارهای جالب آنها را انجام میدهید؟'=>['score'=> 1 ,'type' => 'E']],
            'آیا  '=>['از اتمام کارها پیش از زمان موعود احساس رضایت میکنید؟'=>['score'=> 1 ,'type' => 'E'],'از سرعت و کارآمدی خود در لحظات آخر انجام کار لذت میبرید؟'=>['score'=> 1 ,'type' => 'E']],
        ];
        $question_option = array();
        $q_num = 1;
        $parent_id = 1;
        foreach ($questions as $question => $options){
            $question_option []=[
                'question_option' => $question,
                'q_num' => $q_num,
                'parent_id' => 0,
                'score' => 0,
                'type' => null,
            ];

            $type = array();
            switch ($q_num){
                case $q_num < 26:
                   $type[0] = random_int(0,1) === 0 ? 'E': 'I';
                   $type[1] = $type[0] === 'E'? 'I' : 'E';
                    break;
                case $q_num < 45:
                    $type[0] = random_int(0,1) === 0 ? 'S': 'N';
                    $type[1] = $type[0] === 'S'? 'N' : 'S';
                    break;
                case $q_num < 69:
                    $type[0] = random_int(0,1) === 0 ? 'T': 'F';
                    $type[1] = $type[0] === 'T'? 'F' : 'T';
                    break;
                case $q_num > 68:
                    $type[0] = random_int(0,1) === 0 ? 'P': 'J';
                    $type[1] = $type[0] === 'P'? 'J' : 'P';
                    break;

            }
            $i = 0;
            foreach ($options as $option => $parameters){
                $question_option []=[
                    'question_option' => $option,
                    'q_num' => $q_num,
                    'parent_id' => $parent_id,
                    'score' => random_int(0,2),
                    'type' => $type[$i],
                ];
                $i++;
            }

            $q_num++;
            $parent_id += 3;
        }

        DB::table('questions')->insert($question_option);
    }
}