@extends('layout')
@section('title', 'Page Content')
@section('content')
    @component('inc.alert')
        
    @endcomponent
    <div class="group-info">
        <span class="title-blue"><a href="{{url('/form01')}}">{{$name}}</a></span>
        <span class="title-blue">キャンペーン概要</span>
        <div class="content-sub">
            <p>サントリーザ・プレミアム・モルツブランド製品、及び対象のお肉製品のレシート（複数枚可）を１口として、ご応募ください。合計5,000名様に、イオンで引き換えられる「ザ・プレミアム・モルツ350ml缶 無料クーポン」が当たります！</p>
        </div>
    </div>
    <div class="group-info">
        <span class="title-blue">応募方法</span>
        <div class="content-sub">
            <ul class="list-info">
                <li class="first-number">パソコン・スマートフォンからキャンペーンサイトにアクセスしてください。</li>
                <li class="first-number2">応募フォームより必要事項をご記入し、購入対象期間中に、対象店舗でお買上げいただいたサントリー ザ・プレミアム・モルツブランド製品、及び対象のお肉製品のレシート写真（複数枚可）を添付のうえご応募ください。</li>
            </ul>
            <ul class="list-info list-info-flower">
                <li>レシートは、キャンペーン期間内であれば2枚に分かれていてもご応募可能です。その場合は、1回の応募で2枚添付してください。（同一店舗、同一日付でなくても可）</li>
                <li>応募時には、あらかじめ本キャンペーンの賞品を引換えられる店舗、および賞品の引換え方法をご確認ください。</li>
                <li>撮影するレシートは、「購入商品名」「購入日時」「店舗名」「電話番号」が判読できるように撮影してください。</li>
            </ul>
        </div>
    </div>
    <div class="group-info">
        <span class="title-blue">応募資格</span>
        <div class="content-sub">
            <p>日本国内にお住まいの20歳以上の方</p>
            <ul class="list-info list-info-flower">
                <li>ご応募はお一人様1回限りとなります。</li>
                <li>サントリーグループの社員および関係者は応募できません。</li>
            </ul>
        </div>
    </div>
    <div class="group-info">
        <span class="title-blue">当選発表</span>
        <div class="content-sub">
            <p class="mb20">厳正なる抽選のうえ当選者を決定し、2017年3月22日（水）より順次、メールまたはTwitterのダイレクトメールにて、イオンで引換えられる「ザ・プレミアム・モルツ350ml缶 無料クーポン」をお送りいたします。</p>
            <ul class="list-info list-info-flower mb20">
                <li>ご応募の際は、指定受信設定を解除していただくか、下記ドメインの受信許可設定をお願いします。</li>
            </ul>
            <p class="txt-blue txt-bold mb20">「ドメイン名が入ります」 </p>
            <ul class="list-info list-info-flower">
                <li>ダイレクトメールを受信拒否設定している場合、当選連絡をすることができないため、応募対象外となります。</li>
            </ul>
        </div>
    </div>
    <div class="group-info">
        <span class="title-blue">賞品の引換方法</span>
        <div class="content-sub">
            <ul class="list-info">
                <li class="first-number">当選メールに表示されるURLにアクセスいただき、バーコードを表示してください。 </li>
                <li class="first-number2">対象店舗に設置されている端末（クーポン発券機・ハッピーゲート）にバーコードをかざして、引換えクーポン券をお受取りください。 </li>
                <li class="first-number3">引換えクーポン券と「ザ・プレミアム・モルツ350ml缶 無料クーポン」1本をレジにお持ちいただきお引換えください。  </li>
            </ul>
            <ul class="list-info list-info-flower">
                <li>パソコンからご応募された場合、バーコードのURLをスマートフォン・携帯電話に転送するか、バーコードを印刷してご使用ください。</li>
                <li>応募時には、あらかじめ本キャンペーンの賞品を引換えられる店舗、および賞品の引換え方法をご確認ください。</li>
            </ul>
            <p class="txt-bold mb15 mt15">以下の場合は直接ご入力いただく方法で発券してください。</p>
            <ul class="list-info list-info-dots mb20">
                <li>印刷やスマートフォン・携帯電話への転送ができない場合</li>
                <li>スマートフォン・携帯電話でバーコードが表示できない場合</li>
                <li>バーコードがスキャンできない場合 ※お引換えの際、店頭で年齢確認をさせていただく場合がございます。</li>
            </ul>
            <p>【発券期間】 </p>
            <p class="txt-red txt-bold mb20">2017年3月21日（金）7:00〜 2017年4月2日（日）21:00</p>
            <p>【店舗引換え期間】</p>
            <p class="txt-red txt-bold mb20">2017年3月31日（金）0:00〜2017年4月2日（日）23:59</p>
            <ul class="list-info list-info-flower">
                <li>当選された場合は必ず上記期間内に、商品の引換えを行ってください。</li>
            </ul>
        </div>
    </div>
    <div class="group-info">
        <span class="title-blue">引換え可能店舗</span>
        <div class="content-sub">
            <p>イオン（北海道・九州・琉球を除く）</p>
            <p class="view-arrow">詳しい店舗は<a href="" class="txt-link">こちら</a>をご確認ください</p>
        </div>
    </div>
    <div class="group-info">
        <span class="title-blue">注意事項</span>
        <div class="content-sub ">
            <p>発券したクーポンの汚損・破損・紛失によるお取り換え・再発行はできません。</p>
            <p>店舗によって、対象商品のお取扱いがない、または品切れの場合がございます。</p>
            <p>店頭の商品は、パッケージデザインが異なる場合がございます。</p>
            <p>次の場合はご応募または当選権利が無効となる場合がございますので、ご注意ください。</p>
            <ul class="list-info list-info-dots">
                <li>賞品引換え期間中に賞品の引換えが完了していない場合</li>
                <li>キャンペーンの当選権利を他人に譲渡・転売した場合または換金した場合</li>
                <li>Twitterの利用規約に反する不正なアカウント(架空アカウント、他人のなりすましアカウント、同一人物による複数アカウントなど)を利用して応募があった場合</li>
                <li>その他、応募に関して不正な行為があった場合</li>
            </ul>
            <p>メール受信拒否設定（ドメイン指定受信）を設定している場合は、『@・・・・・・』からのメールを受信できるよう、設定を変更してください。</p>
            <p>設定変更がされていない場合、応募画面URLのご案内メール、およびバーコード表示URLの転送メールが受信できない場合がございます。</p>
            <p>パソコン・スマートフォンからご応募いただけます。</p>
            <p>お使いいただいているパソコンの環境、また一部のスマートフォンではご応募いただけない場合がございます。</p>
            <p>インターネット接続料および通信料はお客様のご負担となります。</p>
            <p>携帯電話、PHS、PDA、mopera U等ではご応募いただけません。</p>
        </div>
    </div>
    <div class="group-info">
        <span class="title-blue">個人情報の取扱について</span>
        <div class="content-sub">
            <p>ご入力いただいた個人情報（メールアドレス・Twitterアカウント）は、サントリー酒類株式会社にて賞品の送付、応募者・当選者への諸連絡、重複当選の有無の確認のために利用させていただきます。</p>
        </div>
    </div>
    <a href="{{url('/')}}">
        <img src="images/btn1.jpg" alt="応募フォームはこちら" class="btn-go-page">
    </a>
@endsection