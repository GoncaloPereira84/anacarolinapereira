<?php
include "config/start.php";

$pathinfo = getPathInfo();

if (isset($pathinfo[0]))
    $area = $pathinfo[0];
else
    $area = 'home';

if (isset($pathinfo[1]))
    define('IMG_PATH', '../../img');
else
    define('IMG_PATH', '/img');
?>

<!DOCTYPE HTML>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <?php
    //HOME
    if (isset($pathinfo[0]) && !isset($pathinfo[1])) {
        echo '<link rel="shortcut icon" type="image/png" href="favicon.png" />';
        if ($pathinfo[0] == 'sobre-nos') {
            echo '<title>Sobre Nós - Ana Carolina Pereira - Clínica de Psicologia</title>
            <meta name="description" content="Somos uma Clínica de Psicologia em Coimbra. Que abraça a infância, a adolescência e a adultez. Que considera o ato psicológico como de charneira entre a confiança na qualidade dos serviços profissionais especializados e a confiança de que, no espaço da relação clínica, se promova a saúde mental e familiar." />
            <meta property="og:description" content="Somos uma Clínica de Psicologia em Coimbra. Que abraça a infância, a adolescência e a adultez. Que considera o ato psicológico como de charneira entre a confiança na qualidade dos serviços profissionais especializados e a confiança de que, no espaço da relação clínica, se promova a saúde mental e familiar." />
            <meta property="og:url" content="https://www.anacarolinapereira.pt/sobre-nos" />
            <meta property="og:title" content="Sobre Nós - Ana Carolina Pereira - Clínica de Psicologia" />
            <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
        } else if ($pathinfo[0] == 'servicos') {
            echo '<title>Serviços - Ana Carolina Pereira - Clínica de Psicologia</title>
            <meta name="description" content="A sua confiança pela nossa equipa e nos nossos serviços interpela e exige o compromisso, ético e profissional, de lhe proporcionarmos um conjunto de serviços clínicos especializados. Que condensam anos de prática clínica e contínua atualização profissional e académica." />
            <meta property="og:description" content="A sua confiança pela nossa equipa e nos nossos serviços interpela e exige o compromisso, ético e profissional, de lhe proporcionarmos um conjunto de serviços clínicos especializados. Que condensam anos de prática clínica e contínua atualização profissional e académica." />
            <meta property="og:url" content="https://www.anacarolinapereira.pt/servicos" />
            <meta property="og:title" content="Serviços - Ana Carolina Pereira - Clínica de Psicologia" />
            <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
        } else if ($pathinfo[0] == 'academia') {
            echo '<title>Academia - Ana Carolina Pereira - Clínica de Psicologia</title>
            <meta name="description" content="A Academia. Pretende ser um espaço de conhecimento. De descoberta e exploração. De um horizonte aberto e infinito. Com capacidade de olhar desde o alto. De liberdade, portanto. De observar e aprender. Como uma garça. No fundo, será isso: a Academia como um espaço que nos possibilite voar para o infinito, pelo que aprendemos e pelo que partilhamos. Com e para pessoas. Com e para curiosos por aprender. E partilhar." />
            <meta property="og:description" content="A Academia. Pretende ser um espaço de conhecimento. De descoberta e exploração. De um horizonte aberto e infinito. Com capacidade de olhar desde o alto. De liberdade, portanto. De observar e aprender. Como uma garça. No fundo, será isso: a Academia como um espaço que nos possibilite voar para o infinito, pelo que aprendemos e pelo que partilhamos. Com e para pessoas. Com e para curiosos por aprender. E partilhar." />
            <meta property="og:url" content="https://www.anacarolinapereira.pt/academia" />
            <meta property="og:title" content="Academia - Ana Carolina Pereira - Clínica de Psicologia" />
            <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
        } else if ($pathinfo[0] == 'blog') {
            echo '<title>Blog - Ana Carolina Pereira - Clínica de Psicologia</title>
            <meta name="description" content="Gosto de me sentir “em casa”. E, por isso, moro, também, aqui. Nos pensamentos que escrevo. Nos quais anseio, sempre, confidenciando o que fui aprendendo. O que continuo a aprender. Nas conversas..." />
            <meta property="og:description" content="Gosto de me sentir “em casa”. E, por isso, moro, também, aqui. Nos pensamentos que escrevo. Nos quais anseio, sempre, confidenciando o que fui aprendendo. O que continuo a aprender. Nas conversas..." />
            <meta property="og:url" content="https://www.anacarolinapereira.pt/blog" />
            <meta property="og:title" content="Blog - Ana Carolina Pereira - Clínica de Psicologia" />
            <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
        } else if ($pathinfo[0] == 'contactos') {
            echo '<title>Contactos - Ana Carolina Pereira - Clínica de Psicologia</title>
            <meta name="description" content="Para qualquer questão que possamos corresponder, estamos, também, aqui!" />
            <meta property="og:description" content="Para qualquer questão que possamos corresponder, estamos, também, aqui!" />
            <meta property="og:url" content="https://www.anacarolinapereira.pt/contactos" />
            <meta property="og:title" content="Contactos - Ana Carolina Pereira - Clínica de Psicologia" />
            <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
        } else if ($pathinfo[0] == 'perguntas-frequentes') {
            echo '<title>Perguntas Frequentes - Ana Carolina Pereira - Clínica de Psicologia</title>
            <meta name="description" content="Consulte as nossas Perguntas Frequentes para tirar dúvidas rápidas sobre a clínica e os nossos serviços." />
            <meta property="og:description" content="Consulte as nossas Perguntas Frequentes para tirar dúvidas rápidas sobre a clínica e os nossos serviços." />
            <meta property="og:url" content="https://www.anacarolinapereira.pt/perguntas-frequentes" />
            <meta property="og:title" content="Perguntas Frequentes - Ana Carolina Pereira - Clínica de Psicologia" />
            <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
        } else if ($pathinfo[0] == 'politica-privacidade') {
            echo '<title>Política de Privacidade - Ana Carolina Pereira - Clínica de Psicologia</title>
            <meta name="description" content="Consulte a Política de Privacidade e os Termos e Condições para estar a par das condições de navegação do nosso site." />
            <meta property="og:description" content="Consulte a Política de Privacidade e os Termos e Condições para estar a par das condições de navegação do nosso site." />
            <meta property="og:url" content="https://www.anacarolinapereira.pt/politica-privacidade" />
            <meta property="og:title" content="Política de Privacidade - Ana Carolina Pereira - Clínica de Psicologia" />
            <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
        } else if ($pathinfo[0] == 'marcar-consulta') {
            echo '<title>Marcar Consulta - Ana Carolina Pereira - Clínica de Psicologia</title>
            <meta name="description" content="Pode marcar rapidamente a sua consulta em Ana Carolina Pereira - Clínica de Psicologia através do nosso formulário online. Cómodo e eficiente!" />
            <meta property="og:description" content="Pode marcar rapidamente a sua consulta em Ana Carolina Pereira - Clínica de Psicologia através do nosso formulário online. Cómodo e eficiente!" />
            <meta property="og:url" content="https://www.anacarolinapereira.pt/marcar-consulta" />
            <meta property="og:title" content="Marcar Consulta - Ana Carolina Pereira - Clínica de Psicologia" />
            <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
        }
    } else if (!isset($pathinfo[0])) {
        echo '<title>Ana Carolina Pereira - Clínica de Psicologia</title>
        <meta name="description" content="Somos uma Clínica de Psicologia em Coimbra que disponibiliza serviços para crianças, jovens e adultos. Marque já a sua consulta!" />
        <meta property="og:description" content="Somos uma Clínica de Psicologia em Coimbra que disponibiliza serviços para crianças, jovens e adultos. Marque já a sua consulta!" />
        <meta property="og:url" content="https://www.anacarolinapereira.pt" />
        <meta property="og:title" content="Ana Carolina Pereira - Clínica de Psicologia" />
        <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
        echo '<link rel="shortcut icon" type="image/png" href="favicon.png" />';
    }

    if (isset($pathinfo[1])) {
        if ($pathinfo[0] == 'blog') {
            echo '<link rel="shortcut icon" type="image/png" href="../favicon.png" />';
            $get_blog_posts_single = "SELECT * 
            from blog_posts
            order by date desc";

            $result_topics_single = mysqli_query($conn, $get_blog_posts_single);
            $posts_single = array();

            while ($row_single = mysqli_fetch_assoc($result_topics_single)) {
                $posts_single[] = $row_single;
            }

            foreach ($posts_single as $p) {
                if ($p['url_code'] == $pathinfo[1]) {

                    $img = $p['img_src'];
                    if ($img == !null) {
                        $dots = '../../httpdocs/';
                        $img_trimmed = str_replace($dots, '', $img);
                    } else {
                        $img_trimmed = 'og-img.jpg';
                    }

                    $about_notags = str_replace(['<p>', '</p>', '<br>', '<o:p>', '</o:p>', '<u>', '</u>', '<i>', '</i>', '<b>', '</b>', '<a>', '</a>'], '', $p['text']);
                    $about_trimmed = (strlen($about_notags) > 160) ? substr($about_notags, 0, 160) . '...' : $about_notags;

                    echo '<title>' . $p['title'] . ' - Ana Carolina Pereira - Clínica de Psicologia</title>
                        <meta name="description" content="' . $about_trimmed . '" />
                        <meta property="og:description" content="' . $about_trimmed . '" />
                        <meta property="og:url" content="https://www.anacarolinapereira.pt/blog/' . $p['url_code'] . '" />
                        <meta property="og:title" content="' . $p['title'] . ' - Ana Carolina Pereira - Clínica de Psicologia" />
                        <meta property="og:image" content="https://www.anacarolinapereira.pt/' . $img_trimmed . '" />';
                }
            }
        } else if ($pathinfo[0] == 'servicos') {
            echo '<link rel="shortcut icon" type="image/png" href="../favicon.png" />';
            $servicos_query_1 = "SELECT * 
            from servicos";

            $result1 = mysqli_query($conn, $servicos_query_1);
            $serv = array();

            while ($row1 = mysqli_fetch_assoc($result1)) {
                $serv[] = $row1;
            }

            foreach ($serv as $s) {
                if ($s['slug'] == $pathinfo[1]) {
                    $about_notags = str_replace(['<p>', '</p>', '<br>', '<o:p>', '</o:p>', '<u>', '</u>', '<i>', '</i>', '<b>', '</b>', '<a>', '</a>'], '', $s['short_description']);
                    $about_trimmed = (strlen($about_notags) > 160) ? substr($about_notags, 0, 160) . '...' : $about_notags;

                    echo '<title>' . $s['title'] . ' - Ana Carolina Pereira - Clínica de Psicologia</title>
                    <meta name="description" content="' . $about_trimmed . '" />
                    <meta property="og:description" content="' . $about_trimmed . '" />
                    <meta property="og:url" content="https://www.anacarolinapereira.pt/srvicos/' . $s['slug'] . '" />
                    <meta property="og:title" content="' . $s['title'] . ' - Ana Carolina Pereira - Clínica de Psicologia" />
                    <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
                }
            }
        }
    }

    if (isset($pathinfo[0]) && isset($pathinfo[1]) && isset($pathinfo[2])) {
        echo '<link rel="shortcut icon" type="image/png" href="/favicon.png" />';
        $formacoes_query = "SELECT *
        from formacoes
        inner join formacoes_categorias on formacoes_categorias.id = formacoes.categoria_id";

        $res_f = mysqli_query($conn, $formacoes_query);
        $formacoes = array();

        while ($row_f = mysqli_fetch_assoc($res_f)) {
            $formacoes[] = $row_f;
        }

        foreach ($formacoes as $f) {
            if ($f['slug'] == $pathinfo[2]) {
                $img = $f['img_src'];
                $dots = '../../httpdocs/';
                $trimmed = str_replace($dots, '', $img);

                $about_notags = str_replace(['<p>', '</p>', '<br>', '<o:p>', '</o:p>', '<u>', '</u>', '<i>', '</i>', '<b>', '</b>', '<a>', '</a>'], '', $f['text']);
                $about_trimmed = (strlen($about_notags) > 160) ? substr($about_notags, 0, 160) . '...' : $about_notags;

                echo '<title>' . $f['title'] . ' - Ana Carolina Pereira - Clínica de Psicologia</title>
                <meta name="description" content="' . $about_trimmed . '" />
                <meta property="og:description" content="' . $about_trimmed . '" />
                <meta property="og:url" content="https://www.anacarolinapereira.pt/academia/' . $f['url_code_form'] . '/' . $f['slug'] . '" />
                <meta property="og:title" content="' . $f['title'] . ' - Ana Carolina Pereira - Clínica de Psicologia" />
                <meta property="og:image" content="https://www.anacarolinapereira.pt/' . $trimmed . '" />';
            }
        }
    }
    ?>
    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="robots" content="index,follow" />
    <meta name="google-site-verification" content="2NCKredf-naxscpmwp-3HBRvMeeRkXEW_v-iVJ3ZXCM" />
    <link rel="canonical" href="https://www.anacarolinapereira.pt/">

    <link rel="stylesheet" href="/css/dist/main.min.css?v=2022">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YDTTKWVRP3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YDTTKWVRP3');
    </script>
    
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Ana Carolina Pereira - Clínica de Psicologia",
            "image": "https://www.anacarolinapereira.pt/uploads/og-img.jpg",
            "@id": "https://www.anacarolinapereira.pt/",
            "url": "https://www.anacarolinapereira.pt/",
            "telephone": "+351239132401",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Rua Machado de Castro, 7, R/C",
                "addressLocality": "Coimbra",
                "postalCode": "3000-254",
                "addressCountry": "PT"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 40.2136424,
                "longitude": -8.4188992
            },
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
                ],
                "opens": "09:00",
                "closes": "20:00"
            },{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "09:00",
                "closes": "13:00"
            }],
            "sameAs": [
                "https://www.facebook.com/anacarolinapereirapc/",
                "https://www.instagram.com/anacarolinapereirapc/"
            ] 
        }
    </script>
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "Como posso contactar os vossos serviços?",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "Poderá contactar-nos através do +351 927 667 119 ou geral@anacarolinapereira.pt. Este primeiro contacto será, sem dúvida, muito importante uma vez que possibilitará que possamos esclarecer quaisquer dúvidas que possam surgir bem como permitirá que possamos transmitir as diretrizes de determinado procedimento clínico e, assim, estabelecer as bases que sustentarão um exercício do ato clínico assente na transparência da comunicação, no consentimento informado, no rigor dos procedimentos clínicos que devem balizar a atividade psicológica e, sobretudo, no respeito e confiança de quem se nos confia."
            }
        },{
            "@type": "Question",
            "name": "O que faz um Psicólogo?",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "No caso específico da área clínica/psicoterapêutica, um psicólogo com formação clínica pretende, mediante técnica especializada, no âmbito da relação clínica, identificar e interpretar as circunstâncias/os contextos/os “ruídos” emocionais que possam estar a condicionar a saúde emocional de uma pessoa, com traduções nas mais diversas áreas da vida. Pretende, igualmente, e partindo das dinâmicas de funcionamento mental e vida relacional, promover um espaço de significações, re(significações), legendas dos potencias “ruídos emocionais”, de pensar a dor que, por vezes, acaba por somente encontra “lugar” de ser manifestada no espaço do corpo (e que provoca, ainda, mais dor) ou em sinais e sintomas diversos que, sublinhe-se, nunca serão o ponto de chegada de um acompanhamento psicoterapêutico. Mas o seu ponto de partida. Para, na relação clínica, se poder pensar o não pensado. A partir deles. Mas para além deles. Com o objetivo, sempre presente, que a pessoa que se encontra nesse espaço clínico (concebido na sua dimensão relacional) possa, ao legendar o ruído, daí conseguir retirar contrapartidas práticas para a sua vida. E, nesse mesmo espaço clínico, o terapeuta possa, igualmente, olhar para dentro de si. Como técnico. E, como tal, como pessoa. Porque uma relação clínica nunca será um exercício unilateral ou de escuta passiva. Será, sempre, um espaço de construção. (Re)construção. Significação. Em ambas as direções."
            }
        },{
            "@type": "Question",
            "name": "O que distingue as especificidades de um psicólogo clínico e de um psiquiatra?",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "A psicologia e a psiquiatria constituem domínios da ciência subsidiárias de formações académicas distintas, ainda que, como denominador comum, versem sobre a promoção da saúde mental. Mais especificamente, o psicólogo clínico, em particular, é formado em psicologia clínica, sendo que o psiquiatra é formado em medicina, com uma especialização em psiquiatra. O psicólogo clínico, na sua prática clínica, é especialista nos domínios de atuação que diferem de um psiquiatra, nomeadamente ao nível dos preceitos teórico-práticos e conceptuais, técnicas de diagnóstico, instrumentos e metodologia de avaliação e intervenção psicoterapêutica. A psiquiatria é paritária, para além de todos os considerandos teóricos e clínicos que balizam o seu ramo de especialização, do recurso a prescrição medicamentosa, não estando essa competência na alçada de um psicólogo, especificamente pelo que os separa em termos de formação académica. Seja como for, a psicologia e a psiquiatria, bem como outras áreas do conhecimento científico, não deverão ser concebidas como valências profissionais antagónicas e não comunicantes, pelo contrário. Quão mais se estreitar a ciência e se possibilitar a aprendizagem com os mais diversos conhecimentos científicos, tão mais contrapartidas daí surgirão. Para nós, os profissionais. Para nós, as pessoas que recorrem à seriedade dos profissionais de saúde mental que, mais do que, como acontece, por vezes, arreigados a posições deterministas, fundamentalistas na (re)afirmação das suas competências (em detrimento de todas as demais áreas do conhecimento, por vezes), comungam de algo que os aproxima: a ciência e o conhecimento e o modo como, nessa interdependência, se poderá promover, numa abordagem multidisciplinar, a saúde mental e familiar."
            }
        },{
            "@type": "Question",
            "name": "Confidencialidade e a privacidade serão asseguradas?",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sim, sem dúvida. Na verdade, e regendo-nos por uma Ordem dos Psicólogos Profissionais que, entre as mais-valias que tem acrescentado ao rigor e seriedade da legitimação e afirmação da nossa profissão, elaborou um código deontológico específico que deverá ser respeitado. E, se por hipótese, não dispuséssemos desse mesmo Código, asseguraríamos, ainda assim, o respeito pela confidencialidade e privacidade de quem a nós recorre. Até porque o exercício da nossa atividade clínica não poderia dissociar-se, jamais, dessa premissa de respeito pelo outro. Em síntese, o psicólogo clínico terá o dever, ético e deontológico, de assegurar a confidencialidade e privacidade em contexto clínico. E esse contexto clínico começará, desde logo, aquando de um primeiro contacto (seja por telefone, por email ou nas plataformas sociais que dispusermos para contacto). Prosseguindo a cada ato clínico que, mediante consentimento informado, se vier a realizar. Com efeito, sem esse mesmo consentimento explícito por parte de quem a nós recorre, temos o dever, uma vez mais, ético e deontológico, de não veicularmos qualquer tipo de informação a outrem (seja num primeiro contato ou no decorrer do processo de intervenção clínica). A esta dinâmica excetuar-se-ão as circunstâncias de eminente risco e/ou perigo de vida imediato para a própria pessoa, ou para terceiros, que possa ameaçar, de uma forma grave, a sua integridade física ou psíquica. Nestas circunstâncias, o dever de proteger o bem essencial – a pessoa – e a segurança, física e psíquica, de quem a nós recorre, ou de terceiros, sobrepor-se-á ao dever de proteção da confidencialidade e privacidade, sob risco de, se assim não procedêssemos, o exercício clínico poder redundar num ato clínico abstrato, sem diretrizes éticas demarcadas e sem guidelines que a ninguém protegeria."
            }
        },{
            "@type": "Question",
            "name": "Qual o tipo de procedimento clínico mais indicado?",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "Neste caso em específico, enquanto profissionais na área de saúde mental privilegiaremos um contato atento e disponível e que procure corresponder, no exercício da nossa função, às expetativas de quem procura serviços especializados. Assim, mediante as preocupações evidenciadas e indicadores clínicos relevantes emergentes num primeiro contacto (preferencialmente, por contato telefónico), procuramos explicar o procedimento clínico mais adequado e todas as subsequentes diligências clínicas – sempre no espaço relacional que prima pela transparência e confiança na relação – disponibilizando-nos, sempre, para corresponder a quaisquer esclarecimentos que possam ocorrer."
            }
        },{
            "@type": "Question",
            "name": "Que modalidades de pagamento dispomos?",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "No que se refere às modalidades de pagamento, poderá proceder ao pagamento mediante numerário ou através de terminal de pagamento automático (vulgo, TPA). Em circunstâncias mais específicas, poder-se-á realizar o pagamento mediante transferência bancária."
            }
        }]
        }
    </script>
</head>

<body data-area='<?php echo $area; ?>' class="preload">
    <?php
    if (isset($pathinfo[1])) {
        if ($pathinfo[0] == 'blog') {
            echo '<link rel="shortcut icon" type="image/png" href="../favicon.png" />';
            $get_blog_posts_single = "SELECT * 
            from blog_posts
            order by date desc";

            $result_topics_single = mysqli_query($conn, $get_blog_posts_single);
            $posts_single = array();

            while ($row_single = mysqli_fetch_assoc($result_topics_single)) {
                $posts_single[] = $row_single;
            }

            foreach ($posts_single as $p) {
                if ($p['url_code'] == $pathinfo[1]) {

                    $img = $p['img_src'];
                    if ($img == !null) {
                        $dots = '../../httpdocs/';
                        $img_trimmed = str_replace($dots, '', $img);
                    } else {
                        $img_trimmed = 'og-img.jpg';
                    }

                    $about_notags = str_replace(['<p>', '</p>', '<br>', '<o:p>', '</o:p>', '<u>', '</u>', '<i>', '</i>', '<b>', '</b>', '<a>', '</a>'], '', $p['text']);
                    $about_trimmed = (strlen($about_notags) > 160) ? substr($about_notags, 0, 160) . '...' : $about_notags;

                    echo '
                    <script type="application/ld+json">
                    {
                      "@context": "https://schema.org",
                      "@type": "BlogPosting",
                      "mainEntityOfPage": {
                        "@type": "WebPage",
                        "@id": "https://www.anacarolinapereira.pt/blog/' . $p['url_code'] . '"
                      },
                      "headline": "' . $p['title'] . '",
                      "description": "' . $about_trimmed . '",
                      "image": "https://www.anacarolinapereira.pt/' . $img_trimmed . '",  
                      "author": {
                        "@type": "Person",
                        "name": "Ana Carolina Pereira"
                      },  
                      "publisher": {
                        "@type": "Organization",
                        "name": "Ana Carolina Pereira",
                        "logo": {
                          "@type": "ImageObject",
                          "url": "https://www.anacarolinapereira.pt/uploads/og-img.jpg"
                        }
                      },
                      "datePublished": "' . $p['date'] . '",
                      "dateModified": "' . $p['date'] . '"
                    }
                    </script>
                    ';
                }
            }
        } else if ($pathinfo[0] == 'servicos') {
            // echo '<link rel="shortcut icon" type="image/png" href="../favicon.png" />';
            // $servicos_query_1 = "SELECT * 
            // from servico_details
            // inner join servicos_topicos on servicos_topicos.id = servico_details.servicos_topicos_id";
    
            // $result1 = mysqli_query($conn, $servicos_query_1);
            // $serv = array();
    
            // while ($row1 = mysqli_fetch_assoc($result1)) {
            //     $serv[] = $row1;
            // }
    
            // foreach ($serv as $s) {
            //     if ($s['url_code'] == $pathinfo[1]) {
            //         $about_notags = str_replace(['<p>', '</p>', '<br>', '<o:p>', '</o:p>', '<u>', '</u>', '<i>', '</i>', '<b>', '</b>', '<a>', '</a>'], '', $s['text']);
            //         $about_trimmed = (strlen($about_notags) > 160) ? substr($about_notags, 0, 160) . '...' : $about_notags;
    
            //         echo '<title>' . $s['title'] . ' - Ana Carolina Pereira - Clínica de Psicologia</title>
            //         <meta name="description" content="' . $about_trimmed . '" />
            //         <meta property="og:description" content="' . $about_trimmed . '" />
            //         <meta property="og:url" content="https://www.anacarolinapereira.pt/srvicos/' . $s['url_code'] . '" />
            //         <meta property="og:title" content="' . $s['title'] . ' - Ana Carolina Pereira - Clínica de Psicologia" />
            //         <meta property="og:image" content="https://www.anacarolinapereira.pt/uploads/og-img.jpg" />';
            //     }
            // }
        }
    }
    ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v8.0&appId=241528290597753&autoLogAppEvents=1" nonce="RiCjx9ra"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4544WM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="app">
        <div id="loading">
            <div class="svg-container">
                <svg img-name="chair" viewBox="0 0 330 340">
                    <g id="chair-loader">
                        <path class="main-path-loader" d="M132.69,0c2.3-.06,5.2,1.61,6.83,4.25,1.32,2.15,2,5.79,1.88,10-.07,2.41.2,3.06,2.29,5.34l2.36,2.59,2-2.29c1.11-1.25,2.56-3,3.23-3.93l1.23-1.65,3,1.07a27.76,27.76,0,0,1,6.78,3.45c.15.1-.18.52-.72.93s-1.35,2.36-1.82,4.34a44.11,44.11,0,0,1-1.3,4.65c-.35.84-.08,1.13,1.31,1.41a3.87,3.87,0,0,1,2.33,1.35c.84,1.44.14,11-.82,11.35-.6.2-.7-.78-.45-4.43a44.85,44.85,0,0,1,.64-5.69c.35-1.11-1.08-1.48-8.12-2.12a15.08,15.08,0,0,1-4.65-.95c-.91-.74-1.07-.33-2.16,5.23a46.91,46.91,0,0,1-1.26,5.23c-.34.78-.06,1.12,1.13,1.42s1.49.67,1.24,1.45.08,1.16,1.33,1.45c2.26.53,6.77,2.82,6.77,3.45s.37.75-6.6-1.32A54.4,54.4,0,0,0,142.9,45c-.07.1-.48,1.8-.91,3.78s-.89,3.91-1,4.29.75,1,2,1.43c3.18,1,3.21,1,2.6,2.65a26.76,26.76,0,0,0-.9,4.93c-1,9.86-1.23,11-2.15,11s-.7-2.09.29-7.58c.47-2.59,1-5.71,1.22-6.91l.36-2.2-5.34-1.25c-2.94-.69-5.74-1.26-6.23-1.26s-1.13,1.16-1.64,3.75c-.4,2.07-1,4.5-1.25,5.41a38.05,38.05,0,0,0-.92,5.25c-.37,3.28-.31,3.59.74,3.59a5.22,5.22,0,0,1,2.47.94c1.22.85,1.34.84,1.34,0,0-.66.35-.87,1.05-.66,1.88.57,6.38,1.63,10,2.35,4.53.91,5.15,1.82,3.82,5.63A38,38,0,0,0,147,85.33c-.21,1.32-.51,2.88-.66,3.45h0c-.35,1.26-1.77,1.32-3.81.15a7.63,7.63,0,0,0-3.08-.88,21.62,21.62,0,0,1-4.73-1l-3.15-1,.37-4.53a48.78,48.78,0,0,1,.71-5.74c.26-.93,0-1.22-1-1.31-.76-.06-2.06-.23-2.88-.37l-2-.34c-.39-.06-.09-4.8.49-7.58.23-1.14,1-4.2,1.5-6.3.29-1.15.71-3.31.92-4.8a7,7,0,0,1,.78-2.86c2-.8,2.27-1.47,2.89-8.07.39-4,.38-4-1.35-4.71a27.35,27.35,0,0,0-5.13-1.11c-3.12-.38-3.43-.31-3.71.82-.17.68-.58,2.31-.9,3.63s-.76,3.73-1,5.36a18.86,18.86,0,0,1-.62,3.33c-.12.2.76.44,2,.52,2.29.15,4.55,1.65,4,2.61-.19.31-1.33.4-2.53.19s-2.67-.44-3.26-.53a4.39,4.39,0,0,1-2-1.12c-.89-.89-.89-1.29,0-4.89a37.79,37.79,0,0,0,1-4.8,9,9,0,0,1,.7-2.58,6.35,6.35,0,0,0,.59-2.16,3.76,3.76,0,0,1,.55-1.7c.52-1,1-1.14,2.26-.81a32.24,32.24,0,0,0,4.11.66l2.52.23-.33-2a6.11,6.11,0,0,1,.84-4c1.05-1.89,1.07-2.19.22-3.67-1-1.78-1.38-1.29,4.63-6.34a6.73,6.73,0,0,0,2.28-3.48c1.37-8.32-1.07-15.64-5-15.18-1.94.22-2.45,1.91-1.05,3.45.91,1,.91,1.11,0,1.46-1.59.61-1.9.46-2.63-1.32A4.68,4.68,0,0,1,130.66.66a3.48,3.48,0,0,1,2-.66Zm40.95,4.05a2.15,2.15,0,0,1,1.55.4c.23.23-.45,1.15-1.5,2.05-2.38,2-2.44,4.19-.22,8,2.58,4.41,7.33,7.92,7.58,5.6,0-.41.17-1.81.28-3.1a6.48,6.48,0,0,1,.82-3,2.7,2.7,0,0,0,.62-1.67c0-1.25,3.3-4.79,5.4-5.79,2.56-1.21,4.91-.63,6.42,1.61s2.31,5.55,1.69,7.12c-.32.82-.79.31-2.13-2.32-2.25-4.41-3.46-4.71-6.51-1.66a10.65,10.65,0,0,0-3.07,5.32c-.68,2.85-.44,4.55.56,3.93.27-.16,1.22.39,2.12,1.22,1.68,1.56,1.76,2.39.62,6.86-.31,1.22.1,2,2.21,4.11a23.09,23.09,0,0,0,4.39,3.54,11,11,0,0,1,2.1,1.28c.58.71,6,3,6.05,2.61,0-.24.11-1,.19-1.68.28-2.43,1.72-6.85,2.43-7.44.5-.41,1.43-.23,3,.55a17.44,17.44,0,0,0,5.11,1.46c4.19.45,6.21,1.51,5.78,3-.19.67-.52,2.41-.73,3.85-.36,2.44-.3,2.59.84,2.23a47,47,0,0,1,6.54-.66c2.92-.15,6-.4,6.82-.57s2.42-.45,3.55-.63a11.64,11.64,0,0,0,2.55-.65,17.78,17.78,0,0,1,3.35-.81,38.84,38.84,0,0,0,4.65-1.13c1-.34,4-1.32,6.71-2.17a49.81,49.81,0,0,0,7.5-3A12.09,12.09,0,0,1,264.26,31c.71,0,2.49-.77,10.05-4.28a12.44,12.44,0,0,1,3.41-1.13,1.68,1.68,0,0,0,1.3-.52c.3-.49,6.18-1.77,8.15-1.78l5.4-.07a32.1,32.1,0,0,1,10.5,1.22c1.32.33,3,.72,3.75.88,1.48.32,6.27,2.67,6.75,3.31A10.1,10.1,0,0,0,315.68,30c1.67.86,8.09,7.23,8.09,8a36,36,0,0,0,1.84,4.09c4.15,8.44,3,22.07-3,35.37a36.41,36.41,0,0,0-2.51,6.34,8.74,8.74,0,0,1-.85,1.8,79.41,79.41,0,0,0-4.17,12.58,14.6,14.6,0,0,1-.93,3c-.53,1-2.37,12.91-2.74,17.72-.12,1.65-.33,13.45-.46,26.22s-.38,23.43-.54,23.7a44.8,44.8,0,0,0-.68,6.45,76.93,76.93,0,0,1-.92,8.4c-.3,1.34-.71,3.78-.91,5.43a29,29,0,0,1-.88,4.5c-.28.83-.83,2.85-1.22,4.5a39,39,0,0,1-1.21,4.2c-1.12,2.72-3.59,9.66-3.59,10.1a26.17,26.17,0,0,1-1.5,3.76A22.29,22.29,0,0,0,298,220c0,.73-4.26,9.23-4.82,9.61s-1.78,2.43-4.62,7.43c-1.76,3.1-1.94,3.4-4.52,7.41a16.82,16.82,0,0,0-1.64,2.89,36.94,36.94,0,0,1-2.81,4.36c-3.37,4.8-12.4,13.7-17,16.76a46.51,46.51,0,0,0-4,2.91,19.1,19.1,0,0,1-3.45,2c-1.5.72-2.72,1.56-2.72,1.87s-.35.54-.77.54a21.17,21.17,0,0,0-4.35,1.78,18,18,0,0,1-4.9,1.8,2.27,2.27,0,0,0-1.65.57c-.46.75-7.94,2.41-12.53,2.79-2,.17-4.92.45-6.4.62s-6.35.51-10.8.75c-7.71.42-35.06.32-40.8-.14A200.21,200.21,0,0,1,145,279.78c-2.13-.49-4.83-1-6-1.25s-3.05-.59-4.2-.88-2.91-.68-3.9-.85-4.23-.86-7.2-1.52l-8.7-1.92a17.17,17.17,0,0,1-4-1.23,7.06,7.06,0,0,0-2.59-.73,5.34,5.34,0,0,1-2.56-.85,1.45,1.45,0,0,0-1.39-.33,1,1,0,0,1-1.17-.35,2.75,2.75,0,0,0-2-.64,8.68,8.68,0,0,1-3.35-.91c-1-.5-1.86-.79-2-.65-.83.83-22.07-8.69-27.52-12.33a17.18,17.18,0,0,0-4.06-2,3.81,3.81,0,0,1-2.15-1.38c-.3-.55-.63-.9-.74-.8-.45.45-2.83-.88-6.05-3.39-3.85-3-6.46-6.55-5.32-7.25.44-.27-.11-1-1.57-2.18-3.47-2.71-9.15-8.18-9.15-8.82a16.4,16.4,0,0,0-2.77-3.65c-2.87-3.19-4.1-5.48-3.49-6.47.2-.32,1.45,1,2.78,2.9s2.53,3.59,2.67,3.74.41-.33.61-1.07c.53-2,2.26-1.39,2.48.93.16,1.55.88,2.44,3.76,4.61,3.46,2.6,5.92,3.92,13.46,7.23,2,.87,4.11,1.86,4.73,2.21,1.23.69,6,2.09,13,3.85,2.31.58,11.49,3.3,14.93,4.42a25.81,25.81,0,0,0,5.15,1.25,3.12,3.12,0,0,1,1.74.42,2.58,2.58,0,0,0,1.25.54c.45.07,2.27.44,4,.82s4.26.83,5.57,1a11.89,11.89,0,0,1,2.94.65,14.18,14.18,0,0,0,4.59.86,22.32,22.32,0,0,1,3,.55c1.15.29,3.18.67,4.5.86,5.29.74,7.25,1.06,8.4,1.36.66.17,5.52.41,10.8.52a229.32,229.32,0,0,1,23.1,1.37c2.47.28,8.51.45,13.42.36,8.29-.14,8.95-.07,9.22,1,.17.62.58,1.12.93,1.12a3.78,3.78,0,0,1,1.73,1c1.31,1.19,1.42.39.18-1.25a4.28,4.28,0,0,1-.88-1.74c0-.73,3.77,4.22,4.73,6.2.58,1.19.34,1.07-1.1-.58-1-1.14-1.83-1.7-1.83-1.24s-.54.35-1.61-.62l-1.61-1.46,1.31,1.89c2.13,3.09,1.49,3.54-.79.55a14.61,14.61,0,0,1-2.1-3.26c0-.28-.69-.38-1.53-.22-1.39.27-1.44.38-.6,1.31,1.83,2,.88,2.56-1,.58-1.59-1.67-2-1.85-2.14-1-.23,1.19-1.31,1.43-1.32.29,0-.55-2-.79-7.65-.89-4.2-.08-11.15-.44-15.44-.79S147.1,259,142.75,259c-7.64.06-11.15-.3-20.39-2.12-2.37-.47-5.34-1-6.6-1.18-4.16-.61-26.62-5.79-29.59-6.84-1.71-.6-3-1-3.9-1.24-.33-.08-1.82-.53-3.3-1s-3.21-1-3.84-1.11-2-.54-3.06-.89-2.44-.75-3.06-.9a86.17,86.17,0,0,1-11.86-4.48c-3.91-1.8-6.08-2-3.83-.35a2.4,2.4,0,0,1,1,1.6c0,.68-.16.66-.75-.07-.92-1.12-2.23-1.43-2.23-.52,0,1.08,5.65,6.36,8.42,7.86,1.39.75,4.31,2.37,6.5,3.61s4.45,2.41,5,2.62,1.05.61,1.05.9.51.53,1.13.53a1.66,1.66,0,0,1,1.48.9,1.74,1.74,0,0,0,1.57.9c.67,0,1.22.22,1.22.49s1.82,1.13,4,1.92,4.72,1.77,5.55,2.2a6.9,6.9,0,0,0,2.43.79,2.47,2.47,0,0,1,1.5.57c.69.69,10.66,4.06,14.2,4.8,1.41.3,4,1,5.87,1.52s3.7,1.08,4.2,1.2a2.45,2.45,0,0,1,.9.32,9.8,9.8,0,0,0,1.8.36c1,.14,4.5.92,7.8,1.73s7.71,1.76,9.81,2.12a38.86,38.86,0,0,1,5.4,1.27,30.14,30.14,0,0,0,4.89,1.14c2.78.44,6.63,1.15,10.8,2,.49.1,2.52.4,4.5.66s4.13.56,4.77.68c1.15.21,12.69,1.06,15,1.11.89,0,1.16-.32,1-1.33-.18-1.72.34-1.74,1,0,.46,1.24.88,1.32,6.88,1.37,3.52,0,6.4-.09,6.4-.28a6.3,6.3,0,0,0-1-1.71c-.53-.76-.82-1.52-.65-1.69s.75.51,1.28,1.54c.95,1.83,2.13,2.49,2.13,1.17A10,10,0,0,0,197,278.3c-.88-1.45-1-1.91-.36-1.4a8.07,8.07,0,0,1,1.74,2.7c1,2.49,1.22,2.61,4.16,2.33,1.95-.18,2.39-.43,2.1-1.18s-.19-.8.77.08c1.44,1.3,3.55.75,2.41-.63a4.48,4.48,0,0,1-.88-1.83,8,8,0,0,0-1.37-2.61c-1.33-1.8-1.6-2.62-.67-2a19.55,19.55,0,0,1,2.49,3.93c1,2,2.21,3.61,2.57,3.65a50.43,50.43,0,0,0,5.07,0c.58-.05.38-.82-.71-2.77-.83-1.48-1.28-2.7-1-2.7s1.1,1.23,1.82,2.73c1.68,3.46,2.26,3,.86-.62a8.49,8.49,0,0,0-5.51-5.37c-1.83-.57-8-4.59-8-5.22,0-.29-.35-.52-.77-.52a3.26,3.26,0,0,1-1.76-1.05c-1.86-2-2.77-2.55-3-1.88s-6.48-8-6.48-8.9a3.67,3.67,0,0,0-.79-1.32,51.15,51.15,0,0,1-4.24-9.26,4.5,4.5,0,0,0-.45-1.29c-1.38-2.44-2.83-12.19-2.46-16.51.17-1.89,0-3.35-.48-3.92-.62-.74-.58-.83.23-.52,1.4.54,1.22-.57-.41-2.55a13.1,13.1,0,0,1-1.84-2.9c-.34-.94,0-.82,1.4.56,3,2.91,2.14.39-1-2.79-1.55-1.58-2.55-2.87-2.22-2.87a10.7,10.7,0,0,1,3,2.43c2.3,2.36,2.38,2.39,2.76,1.05.73-2.6.5-3.33-1.87-5.93-1.6-1.75-2.15-2.75-1.68-3,.85-.52,1.81,0,1.36.69a.74.74,0,0,0,.38.95c.44.27.54.18.28-.26-.71-1.13.36-.78,1.85.62.76.71,1.39,1,1.39.71a8.7,8.7,0,0,0-2.1-2.62,8.4,8.4,0,0,1-2.1-2.64c0-.33,1.08.45,2.4,1.74s2.4,2,2.4,1.66-.61-1.12-1.35-1.64c-.92-.65-1.13-1.09-.66-1.39,1.14-.71-1.8-3.6-4.66-4.59a8,8,0,0,0-2.92-.64,8,8,0,0,1-2.74-.28,92.42,92.42,0,0,0-10.77-1.54c-4.75-.41-7.47-.94-7.83-1.53-.74-1.19,14-.95,20.13.32a77.41,77.41,0,0,1,9,2.11c5.19,1.51,5.24,1.49,9.84-3.26a37.81,37.81,0,0,1,7.86-6.32c2-1.06,3.87-2.12,4.2-2.36,2-1.46,16.66-6.92,20.25-7.55l3.6-.63c4.23-.75,19.77-.36,29.44.73l3.5.39-1-2.34c-1.56-3.64-1.69-4.26-.64-3a12.85,12.85,0,0,1,1.67,3.15c.4,1.09,1.07,2,1.5,2,1,0,1,0-.44-3.33-1.79-4.19-1-4,1,.27l1.7,3.64,5.4-.19c5.4-.18,10.5-1.62,10.5-3a49.62,49.62,0,0,0-3.1-6.39c-1.71-3.16-2.67-5.39-2.15-5a31.61,31.61,0,0,1,3.51,6c1.4,2.87,2.62,5.31,2.71,5.43.32.43,4.19-2.58,6.83-5.3,4.84-5,8.91-12,9.91-17.12.13-.66.52-2.55.87-4.2.53-2.46,2-11.59,2.73-16.8.64-4.61,1-6.79,1.18-8.1.14-.82.4-2.71.58-4.2s.59-4.79.91-7.36l.59-4.65-2.71-4.59c-1.5-2.53-2.3-4.25-1.79-3.83a22.62,22.62,0,0,1,2.82,4.08l1.89,3.32,1-1.91c.54-1,1.16-1.73,1.37-1.52s.67-.79,1-2.23c1.23-5,5.61-18.22,6.42-19.39a4.68,4.68,0,0,0,.82-2.13,2.73,2.73,0,0,1,.71-1.66,3.29,3.29,0,0,0,.83-1.47,23.12,23.12,0,0,1,1.3-3.46c2.19-5,2.56-6,2.56-7.49a2.49,2.49,0,0,1,.5-1.75c1-.59,1.31-13.76.46-17.36-1.58-6.7-7.43-13.49-14.49-16.82-1.3-.61-3.13-1.52-4.06-2s-1.82-.76-2-.61a12.12,12.12,0,0,1-3.71-.53c-7.89-1.86-18.87-.59-26.38,3.05a20.84,20.84,0,0,1-3.73,1.52,61.08,61.08,0,0,0-6.75,2.92c-3.39,1.61-7.39,3.33-8.87,3.84-3.93,1.34-8,2.48-8.53,2.36a6.08,6.08,0,0,0-2,.5,20.54,20.54,0,0,1-4,.91,13.56,13.56,0,0,0-3.61,1c-1.82,1-15.52,1.44-17.13.58-.92-.49-1.31-.51-1.31,0s-.31.46-.68.23-.57-1.75-.36-4.28.08-3.93-.38-4.08a61.45,61.45,0,0,0-6.09-1.11,9.92,9.92,0,0,1-2.62-.94c-1.17-.63-1.52-.62-1.94.05a9,9,0,0,0-.58,4.53c.16,1.34-1.79,5.3-2.25,4.55a4.57,4.57,0,0,0-2.5-1.07c-2.23-.39-9-3.88-9-4.64,0-.25-.34-.46-.75-.47s-2.21-1.5-4-3.3c-2.11-2.14-3.73-3.29-4.65-3.29-1.92,0-1.8.6.52,2.53l2,1.62-1.14,2c-.62,1.08-2.19,4.06-3.48,6.62s-2.74,4.65-3.22,4.65-.86-.15-.86-.33c0-1,4.9-10.37,5.94-11.32l1.24-1.12-1.64-1.41a7,7,0,0,0-2.1-1.42,21.54,21.54,0,0,1-3.76-2.19,14,14,0,0,0-3.47-2,72.45,72.45,0,0,0-6,11.49c-.48,1.51-1.49,1.29-1.92-.42-.25-1,.07-2.06,1.07-3.44a32.36,32.36,0,0,0,2.26-3.64c.45-.91,1-1.65,1.25-1.65s.75-.79,1.15-1.76c1-2.48,1.93-2.6,5-.66,4.5,2.85,5.26,3.19,4.87,2.15-.22-.58.18-1.14,1.12-1.57,1.38-.63,1.42-.8.75-2.75-.56-1.63-1.36-2.39-3.66-3.47-3.54-1.66-7.75-7-8.36-10.64-.45-2.66.59-5.9,1.89-5.9.46,0,.83-.27.83-.6s.49-.54,1.07-.58Zm-20,12.58c-.55,0-.89.14-.89.45A10.19,10.19,0,0,1,151,19.63c-2.19,2.54-2.71,4.27-1.8,6a2.36,2.36,0,0,1,.32,1.84c-.19.31.27.69,1,.85s2.46.42,3.78.6l2.4.32,1.65-4.66C159.23,22,160,19.7,160,19.47a6.56,6.56,0,0,0-2.38-1.63,10.3,10.3,0,0,0-3.93-1.21ZM141,19.87a.24.24,0,0,0-.15,0,4.79,4.79,0,0,0-.9,2.33,7.72,7.72,0,0,1-1.57,3.28,5.31,5.31,0,0,0-1.19,1.68,18.45,18.45,0,0,1-2,3.17,19.55,19.55,0,0,0-2.67,5.11c-.57,2.09-.5,2.43.69,3.4s1.33,1.71,1.46,6.67c.07,3.08.14,5.78.15,6s.86.69,1.9,1,2,.66,2,.66a61.77,61.77,0,0,0,1.9-8.55c.24-1.72.59-2.25,1.49-2.25.64,0,1-.22.87-.48a6.73,6.73,0,0,1,.3-2.85c.33-1.3.72-3.18.87-4.17s.61-3.15,1-4.8c.62-2.48,1-3,2.07-2.95,1.28,0,1.28,0,.31-1.65-.55-.94-1.17-1.7-1.38-1.7a12.28,12.28,0,0,1-2.57-2.13A7.09,7.09,0,0,0,141,19.87Zm43.65,2.19c-.45-.07-.63.59-.35,1.92.54,2.55,1.13,3.11,2.06,2,.63-.76.59-1.19-.21-2.43-.62-.94-1.14-1.42-1.5-1.47Zm-48.79,1.55a4.9,4.9,0,0,0-1.49,1.08c-.89.82-1.46,1.66-1.26,1.86.4.4,2.88-2.05,2.88-2.85,0-.07-.05-.1-.13-.09Zm19.79,26c.05,0,.08.09.09.28.06,1.21,2.41,2.7,4.25,2.7a2.61,2.61,0,0,1,1.53.53,10.73,10.73,0,0,0,2.77,1.23c2.27.72,4,2.18,3.29,2.85-.2.2-2.52-.48-5.15-1.52-6.61-2.61-7-2.55-7.79,1.14a30.92,30.92,0,0,0-.65,3.9c0,.56-.62.87-1.73.87-1.29,0-1.82.35-2.09,1.35-.66,2.46-.41,2.88,2.47,4.12,2.6,1.11,2.75,1.29,1.77,2-1.19.87-3,.54-5-.89s-2.11-2.69-1.16-5.38c.47-1.32.66-2.37.43-2.34-1.66.24-3.12-.21-3.12-1,0-1.15,2.09-1.16,5.27,0l2.43.85.4-2.9c.45-3.26,1.62-7.77,2-7.79ZM135.5,74.07c-.6,0-.86,1-1.57,4.79-.53,2.87-.76,5.41-.51,5.65a13,13,0,0,0,3.45,1.15,53.36,53.36,0,0,1,5.85,1.78l2.85,1.09v-1.3a31.64,31.64,0,0,1,1.19-5.45c.86-3,1-4.37.54-4.93s-.82-.74-1-.7a13.23,13.23,0,0,1-2.49-.3c-1.16-.22-3.14-.54-4.4-.71a12.89,12.89,0,0,1-3.39-.9,1.21,1.21,0,0,0-.48-.17Zm174.21,33s-.1.06-.16.28h0a3.38,3.38,0,0,0,0,1.8c.16.41.28-.07.27-1.06,0-.62-.06-1-.14-1Zm-2.08,17.78c-.28.18-.71,2.42-.95,5s-.57,5.2-.73,5.86a26.45,26.45,0,0,0-.46,3.3c-.37,4.79-2.7,16.24-3.84,18.9-3.12,7.27-6,11.91-9.68,15.36-3,2.87-8.94,6.44-11.48,6.93a14.46,14.46,0,0,0-3.12.94c-1.49.77-9.86.72-15.7-.08-11.09-1.53-29.57-1.68-34.8-.29-2,.53-12.39,4.5-15.77,6a27.91,27.91,0,0,1-3.54,1.42,9.86,9.86,0,0,0-2.24,1.41,30.22,30.22,0,0,1-3.73,2.38c-2.2,1.13-7.42,5.87-7.42,6.73a6.17,6.17,0,0,1-1.5,2.21,6,6,0,0,0-1.5,2.24.67.67,0,0,1-.7.63c-.39,0-.52.18-.31.4a.86.86,0,0,1-.09,1.05c-1.45,1.92-3.47,9.86-4,15.95-.75,7.75-.6,13,.49,17.07,1.27,4.73,5.69,14.37,8.12,17.67,3.58,4.86,10.54,10.65,16.71,13.9,1.79.94,3.84,2.12,4.56,2.62.9.64,1.43.72,1.71.27s.53-.46.83,0-.31.94-1.48,1.34l-1.9.66,2.88,2.92h0c2.74,2.79,3,2.91,5.9,2.79a53,53,0,0,0,6.24-.71l3.21-.59-.31-2.13c-.18-1.17-.49-3.07-.7-4.23-.27-1.44-.21-1.81.18-1.2a14.58,14.58,0,0,1,1,4.05c.34,2.55.64,3.15,1.56,3.15,1.38,0,1.43-1,.3-5.25-.47-1.73-.63-3.15-.37-3.15.53,0,1.82,4.65,1.82,6.57,0,.83.39,1.23,1.2,1.23a2.49,2.49,0,0,0,1.19-.15c0-.08-.4-1.63-.89-3.45a27.44,27.44,0,0,1-.88-4.2c0-1.55.94.53,1.74,3.94.68,2.93.78,3,2.52,2.78,2.36-.35,2.65-1.28,1.48-4.72a18.83,18.83,0,0,1-.94-3.46c0-1.27,1.71,2.41,2.09,4.6.34,1.94.54,2.17,1.48,1.67s1-.92.51-2.85c-1.24-4.82-1.28-5.14-.63-4.74.36.22,1,1.89,1.39,3.71.48,2.14.94,3.11,1.32,2.73s.23-2-.42-4.6c-.56-2.2-.87-4.15-.7-4.32.45-.45,1.54,2.7,1.94,5.61l.34,2.53,2.05-.86a47.5,47.5,0,0,0,6.38-3.93c9.6-6.83,12.79-9.89,18.79-18,2.87-3.9,2.87-4,.73-8.77-1.84-4.09-.81-3.6,1.28.62,2.28,4.57,1.82,2.32-.59-3-.95-2.06-1.49-3.75-1.21-3.75.64,0,3.63,5.67,3.63,6.89,0,.5.27.91.6.91,1,0,.68-1.68-.94-4.88-2.06-4.05-1.42-4.45.83-.52,1,1.71,1.94,2.84,2.14,2.51s-.59-2-1.75-3.74c-2.77-4.11-2.39-5.23.41-1.23,1.9,2.72,2.24,3,2.95,2.11s.62-1.64-.28-5.14c-1.37-5.33-.83-6,.77-1,.68,2.16,1.2,3.16,1.21,2.31a14.61,14.61,0,0,0-.86-3.9,12.92,12.92,0,0,1-.82-3.3c.05-1.19,2.3,3.6,2.32,5,0,.58.32,1,.68,1s.54-.34.39-.75c-1.4-3.8-2.92-9-2.7-9.2.39-.39,2.85,6.21,2.85,7.64,0,2.34,1.23.69,5.48-7.38,1.43-2.7,1.5-3.16.78-4.61-1.72-3.45-3.93-10-3.07-9.1s1.54,2.7,3.76,9c.26.75.39.76.83,0a2.05,2.05,0,0,0-.29-2.08c-1.23-1.9-4.57-10.62-4.34-11.32.12-.33,1.33,2.19,2.69,5.62,1.82,4.54,2.6,5.93,2.91,5.13s-.31-3-1.44-6a23.41,23.41,0,0,1-1.6-5.13c.33-.33,3.28,5.93,3.28,7a.71.71,0,0,0,.62.75c.87,0,1.91-3,1.33-3.82-.8-1.11-2.71-7-2.38-7.35s1.37,2.4,2.66,6.37c.17.5.92-1.05,1.69-3.44l1.39-4.34-2-4.81c-1.12-2.65-1.89-4.81-1.72-4.81a20.55,20.55,0,0,1,2.23,4.05c2.21,4.67,3.11,3.52,1-1.32-1.56-3.65-1.05-4.44.57-.87s1.57,1.48,0-2.6a24.52,24.52,0,0,1-1.2-3.73c0-1.11,1.06.57,1.78,2.82.39,1.24,1,2.25,1.27,2.25.71,0,.7-1,0-2.35-1-1.85-3-7.25-2.73-7.25a17.62,17.62,0,0,1,2.06,3.45c1.41,2.73,1.79,3.14,1.81,2a18.29,18.29,0,0,0-1.79-5.34c-1-2.12-1.7-4.14-1.56-4.5s.94.83,1.78,2.64,1.55,3,1.57,2.61A26,26,0,0,0,304,177.1c-2.31-5.15-1.87-5.78.61-.87s3,4.23.64-.92c-2.06-4.54-2-4.48-1.29-4.48.3,0,1,1.26,1.62,2.8s1.16,2.5,1.28,2.14-.49-2-1.36-3.75c-1.83-3.62-1.58-4.8.29-1.4,1.29,2.33,1.36,1.82.33-2.19l-.38-1.5,1,1.5,1,1.5-.26-1.5a20.81,20.81,0,0,0-1.24-3.75c-1.14-2.61-.82-3,.49-.6l.89,1.65v-1.5a9.64,9.64,0,0,0-1.12-3.6l-1.12-2.1-.45,1.8a5.14,5.14,0,0,1-.87,2.1,15.46,15.46,0,0,0-1.67,3.15c-.69,1.57-1.53,2.85-1.87,2.85-.73,0,.2-2.79,1.4-4.2s5.08-14.18,5.66-18.53c.69-5.16.81-21.19.16-20.81ZM38.54,133.11a2,2,0,0,1,.34,0c1.35.19,2,1.63.79,1.75-3.56.35-5.21,6.56-3.66,13.74.33,1.55,2.82,4,5.54,5.44,1.43.77,1.63.71,2.73-.8,1-1.33,1.66-1.64,3.71-1.64a8,8,0,0,1,3.77.88c1.13.8,1.37.77,2.33-.3A3.7,3.7,0,0,1,55.66,151c1,0,.5,1.74-.7,2.58a2.25,2.25,0,0,0-1,2.29c.25,1.63.64,1.71,2.91.58s4.59-.41,5,1.61a12.13,12.13,0,0,0,.91,2.68c.88,1.64.67,2.65-.78,3.61-1.17.78-1.24,1-.51,1.89.46.55,1.13.9,1.49.77a9.06,9.06,0,0,1,3.21.52l2.55.76v-2.85c0-3.19,1.09-4.56,3.6-4.54h1.5l0,6.6c0,6.27.11,6.74,1.78,9.3,4,6.14,4.53,7.78,2.67,8.19a49,49,0,0,1-11.16,1.47,40.16,40.16,0,0,0-6,.48c-1.19.33-1.24.48-.49,1.51s1.16,1.1,4.91.46c2.23-.37,6.14-.83,8.69-1,5.55-.38,5.75-.16,6.4,6.66.44,4.52.13,6.11-1,5.39-.64-.4-1.54-5.16-1.54-8.19,0-1.06-.34-1.56-1.12-1.61s-1,.08-.42.75a1.44,1.44,0,0,1,.29,1.49,1.49,1.49,0,0,0,.32,1.53c.4.48.59.87.42.87a10.79,10.79,0,0,1-2-2.2c-.92-1.21-1.32-2-.89-1.72s.7.23.54-.24-.44-.71-.68-.68-.86,0-1.38,0,0,1.13,2,3.42c1.6,1.88,2.53,3.19,2.07,2.91s-.73-.24-.52.34.55.78.85.72.59.43.64,1.09c.08,1-.11.93-1.18-.49-.69-.93-2-2.49-2.81-3.46s-1.08-1.42-.5-1c1.67,1.27,1.22-.16-.61-1.91-1.64-1.58-2.62-1.71-6.14-.83-.83.21-2.58.52-3.9.69a49,49,0,0,0-5.4,1.13l-3,.82.19,3.83a48.56,48.56,0,0,0,.6,5.7l.41,1.87,4.2-2c2.92-1.41,4.92-2,6.56-1.9,1.3.06,2.46-.18,2.58-.54s.79-.51,1.49-.33c1,.27,1.2.14.86-.74s-.28-1,.5-.33.91.61.91,0,.3-.37.81.32,1.1.93,1.46.7a.73.73,0,0,1,1,.17c.48.78-.33,1.19-3,1.54a6.71,6.71,0,0,0-2.89.9,6.85,6.85,0,0,1-3.34.62A14.51,14.51,0,0,0,60.67,205a22.65,22.65,0,0,1-4.2,1.78c-1.51,0-3.89-5.3-3.91-8.62,0-1.11-.19-1.56-.47-1.12-.7,1.09-4.92.27-4.94-1a7.69,7.69,0,0,0-1.8-3.08c-1-1.15-1.62-1.62-1.42-1.05q.82,2.37-1.55-.9c-1.32-1.82-1.33-1.87-.11-.8,1.55,1.36,1.72.66.26-1.1-.57-.69-.17-.45.9.51s1.94,1.52,2,1.21,1.1.61,2.43,2c2.3,2.47,2.48,2.55,3.28,1.5a4.33,4.33,0,0,0,.86-1.87.73.73,0,0,1,.66-.75c.34,0,.43-.32.19-.72-.35-.55-.51-.54-.7,0s-.55.49-1.39-.27c-.63-.57-1.14-.75-1.14-.41a2.36,2.36,0,0,0,.9,1.36,2.41,2.41,0,0,1,.9,1.36c0,.33-.57-.12-1.27-1s-1.41-1.46-1.59-1.28.18.93.81,1.68l1.15,1.35-1.4-1.19a10.17,10.17,0,0,1-2-2.4c-.58-1.08-.54-1.12.35-.38,1.31,1.08,1.28.2,0-1.38-.76-.91-.6-.85.59.21.91.8,1.65,1.18,1.65.84a3.58,3.58,0,0,0-1.21-1.7,2.38,2.38,0,0,1-.89-2.09c.18-.58-.31-1.57-1.19-2.4a5.1,5.1,0,0,1-1.51-2c0-.33,1,.54,2.17,1.93s2.32,2.39,2.51,2.21-.44-1.15-1.39-2.13c-1.11-1.16-1.41-1.8-.85-1.8.92,0,4.58,5.34,4.28,6.24s2.38,3.36,3.55,3.36c1.49,0,2-1.06,1-2.27-.58-.76-.43-.72.57.13,1.18,1,1.47,1,2.22.3,1.58-1.58.28-2.32-2.85-1.61-2.45.56-2.73.78-2.1,1.6s.42.69-.5-.09-1.21-1.65-1.09-5.7c.14-4.49.07-4.73-1.75-6.63-1.37-1.43-1.84-2.44-1.72-3.65.19-1.79-1.19-3.46-2.3-2.77a4.59,4.59,0,0,0-1.22,1.87c-.54,1.41-.61,1.43-2.36.53-1-.52-1.82-.73-1.83-.47s-.55-.17-1.2-.95-1-1.67-.82-2a2,2,0,0,0,0-1.5c-.28-.71-.56-.78-1.16-.28-.93.77-1.59.3-1.59-1.13s-2-3-4-3.17c-1.6-.12-1.71,0-1.53,1.82.15,1.63-.07,2.05-1.35,2.54-1.6.6-2,1.47-.94,2.11a1.12,1.12,0,0,1-.64,2.1,6.33,6.33,0,0,0-2.47.66c-.82.44-1.42.46-1.83,0-.7-.7-2.26-.26-2.26.64a8.31,8.31,0,0,0,2.18,2.6c2.3,2.11,2.43,3.86.27,3.86a2,2,0,0,0-1.55.6,2,2,0,0,1-1.53.6c-1.48,0-3.57,1.78-3.57,3s1.7,3.2,3.15,3.74c1.29.47,1.36,1.82.15,2.82s-1.1,2.15,1,4.11l1.89,1.76-1.23,1.32a4.28,4.28,0,0,0-1.05,3.73c.18,2.54,2.37,6.16,3.34,5.56.32-.19,1.36.2,2.32.89a9.84,9.84,0,0,0,2,1.23,5.34,5.34,0,0,0,1.06-1.95c1-2.62,1-2.59,2.41-1.31s4.2,1.57,4.86.61c.23-.32,0-1.31-.43-2.2-.73-1.41-.72-1.68,0-2a2,2,0,0,0,.89-1.78c0-1.42,1.3-3.09,1.92-2.48.17.17.65-.1,1.07-.6,1.5-1.81,2.34-1.06,2.32,2a11.88,11.88,0,0,0,.33,3.54,12.72,12.72,0,0,1,.68,3.13,59.29,59.29,0,0,0,1.5,7.46c.27.94-.7,4-2,6.1h0l-1.13,1.93-2.07-2.29c-2.58-2.85-2.7-3.86-.18-1.5,1.58,1.49,1.77,1.55,1.17.41-.38-.74-.95-1.35-1.27-1.35a.63.63,0,0,1-.58-.66c0-.38.44-.5,1-.27.89.34.88.23-.09-.84-1.87-2.07-.44-2.39,2.2-.5.56.4,1.17.58,1.36.39s-.34-3.15-1.17-6.58a71.78,71.78,0,0,1-1.51-7.29c0-1.1-.9-1.42-1.45-.52a20.76,20.76,0,0,0-.61,4.27,19.17,19.17,0,0,1-.57,4c-.46.45-2.88.44-5.25,0-1.88-.37-2.22-.27-2.49.78C30.58,210.64,30,211,29,211c-2,0-7.56-3.08-8.95-4.92s-1.53-6.73-.18-8.23c1-1,.93-1.21-.52-2.77-1.66-1.8-1.86-2.74-.92-4.49.49-.92.34-1.28-.75-1.86a7.52,7.52,0,0,1-2.09-1.68,5,5,0,0,1-.31-4.57c1-1.41,4-3.28,5.26-3.28,1.78,0,2.3-1.49.87-2.5-2.68-1.88-1.64-6.1,1.43-5.86s4-.05,4-1.16a2.83,2.83,0,0,1,.91-1.89c.63-.52.8-1.34.56-2.64-.57-3,2.32-5,5.45-3.68,1.64.67,1.91.59,3.39-1s1.66-1.71,3.77-.82c1.27.53,2,.63,1.75.23a5.49,5.49,0,0,1-.36-2.33c0-1.39-.38-1.86-2.57-2.89C36,153,34.21,151,33.38,147.49c-1.44-6,1.62-14.34,5.16-14.38Zm27,.55c1.46,0,3.64,1.12,5.25,2.84l1.67,1.76,2.13-1c2.53-1.23,4.08-.94,5.34,1,1.87,2.85-.58,5.88-4.19,5.19-2.84-.54-1.86,1.4,1.74,3.47q5.64,3.23,5.65,7.64c0,2.19-1.35,5.25-2.54,5.72-1.67.67-2.47-.23-1-1.13a7.33,7.33,0,0,0,1.53-2.49c1.29-3.08.25-5.64-3.23-7.94a18.06,18.06,0,0,0-3.17-1.84c-.22,0-.72,1-1.1,2.33A7.9,7.9,0,0,1,72,152.29c-.83.69-1.17.57-2.4-.86a5.9,5.9,0,0,1-1.43-3.1c0-1.54,2-3.3,3.73-3.3,1.44,0,1.4-2.38-.07-5.27a10.47,10.47,0,0,0-5.16-5.13c-1-.52-1.48-1-1.09-1Zm12.9,4.19c-2.47.05-4.17,3.05-2.16,3.82,1.5.58,2.45.43,3.22-.51C80.48,140,79.78,137.83,78.48,137.85Zm13.44,5.86c2.36-.06,5.65.7,5.65,1.31s-3.35,1.81-5.12,1.81c-.9,0-1.54.54-2,1.65-1.78,4.6-2.51,10.35-1.3,10.35a.69.69,0,0,1,.6.75c0,2.23,5.52,5.89,9,6,2.37.06,7-2.35,7.49-3.95.42-1.27.43-1.27.7.12.47,2.39-2.93,5.34-7,6.11-3.93.74-6.83-.24-10.41-3.54a12.66,12.66,0,0,1-3.34-12.72c.41-1.46.84-3.14,1-3.73.35-1.88,2.89-4.1,4.75-4.15ZM72,146.23c-1.82,0-2.71,1.61-1.88,3.42.35.76.82,1.38,1.06,1.38.74,0,1.6-1.42,1.91-3.15.26-1.41.1-1.65-1.09-1.65ZM61.49,148c.73,0,1,.45.85,1.21s-.82,1.2-2.31,1.2c-2.53,0-3.07-.82-1.12-1.71a7.41,7.41,0,0,1,2.24-.69Zm246.16,2.42c-.06,0-.12,0-.19.15a3.87,3.87,0,0,0-.48,1.76,1.69,1.69,0,0,0,.47,1.31c.26.16.48-.63.48-1.76,0-.92-.11-1.44-.28-1.46Zm-207.8,1.29c.19.07.36.47.66,1.25.7,1.85,1.85,2.22,1.87.6,0-.85.11-.88.54-.2a2.08,2.08,0,0,1,.23,1.65c-.17.44-1.08.8-2,.8-2.19,0-3.26-1.74-2.07-3.36C99.44,151.93,99.66,151.66,99.85,151.73Zm-52.1,1.35c-.85,0-1.18.23-1.18.71s-.68,1.13-1.5,1.44a2.46,2.46,0,0,0-.6,4.2c.9.75,1.2,2.49.55,3.15-.19.19-1.3-.05-2.46-.53-3-1.26-3.9-.9-4.13,1.65-.16,1.8,0,2.28,1.23,2.82a2.81,2.81,0,0,1,1.62,2.62c.24,2.56,1.9,3,3.56.84,1.38-1.75,2.69-1.95,4.52-.67.65.46,1.32.71,1.53.58l-1.35-1.29c-.77-.74-1.29-1.45-1.14-1.59s.78.45,1.4,1.33l1.1,1.54h0c.17-.17,1,.58,1.79,1.67,2.35,3.18,2.54,4,.36,1.5-2-2.24-2-2.26-2.1-.78-.06,1.11.25,1.55,1.18,1.69a2.17,2.17,0,0,1,1.65,1.68c.39,1.47.42,1.46,1.36-.67A5.65,5.65,0,0,1,57,172.42c1-.36,1.34-1.71.42-1.44-.71.22-3.4-3.1-3.25-3.87l1.36,1.62c.82,1,1.57,1.92,1.65,2.05s.15,0,.15-.34a5.27,5.27,0,0,0-1.65-2.05l-1.49-1.32,0,0-.14-.18.16.14a.18.18,0,0,1,.06-.09c.3-.19,1.4.62,2.44,1.81,1.53,1.74,2.05,2,2.75,1.43s.7-1,.25-1.85c-.33-.63-.46-1.14-.27-1.14s-.09-.65-.61-1.44c-.75-1.13-.78-1.5-.16-1.72s.35-.77-.72-2l-1.5-1.73,1.8,1.58c1,.86,2.13,1.45,2.55,1.3,1-.35,1-2.12,0-3.06-.4-.39-.53-.72-.28-.72s.15-.54-.2-1.2c-.85-1.58-2.64-1.52-3.74.13-.85,1.29-.93,1.3-2.47.29a3.36,3.36,0,0,1-1.59-2.12c0-1.86-1.47-3.19-3.78-3.4a8.12,8.12,0,0,0-1,0Zm258.79,1.22c-.25,0-.22.71.19,1.78s1.44,1.32,1.44.47a4.5,4.5,0,0,0-.88-1.65c-.34-.45-.59-.63-.75-.6Zm-.59,2.46c-.09,0-.14.08-.14.27a6.42,6.42,0,0,0,.86,2.4c.49.87.86,1.12.86.6a6.54,6.54,0,0,0-.86-2.4C306.36,157.09,306.1,156.79,306,156.76Zm-247.6,1.85a4.25,4.25,0,0,1,.76.82,5.71,5.71,0,0,1,1.24,2.1c0,.64-.83-.44-1.84-2.4-.21-.4-.26-.57-.16-.52Zm-5.51,1.23a10.21,10.21,0,0,1,2.75,2c1.47,1.29,2.44,2.36,2.16,2.38s-.06.73.51,1.6.73,1.39.37,1.16-.66-.14-.66.19a1.31,1.31,0,0,0,.6,1,1.4,1.4,0,0,1,.6,1.05c0,.37-1-.5-2.25-1.93-3.22-3.72-3.7-4.86-1-2.42s1.73.89-1.47-2.54c-1.61-1.71-2.08-2.56-1.6-2.45Zm61.6,1.62a2.84,2.84,0,0,1,1.47.64c1.23.81,1.46,1.44,1.46,4a12,12,0,0,1-.62,4.18c-.34.64-1,1.16-1.37,1.16-1.32,0-3.23-1.7-4-3.56-1-2.35-.41-4.44,1.52-5.71A3.16,3.16,0,0,1,114.44,161.46Zm-59.36.37c-.16,0,.19.54.79,1.2a4.85,4.85,0,0,0,1.38,1.2c.17,0-.18-.54-.78-1.2A4.7,4.7,0,0,0,55.08,161.83Zm16.73.9c-.62,0-.91,1-1,3.51-.13,2.39.09,3.91.7,4.78.85,1.21.9,1.11,1-1.86C72.71,162.92,72.69,162.73,71.81,162.73Zm42.9,1.14a1.25,1.25,0,0,0-.49.09c-1.5.57-1.84,2.43-.75,4.09,1.24,1.9,2.69,2.49,2.71,1.11a10.38,10.38,0,0,1,.33-2.23C116.88,165.51,115.84,163.92,114.71,163.87Zm-62.6,4.34a5.81,5.81,0,0,1,2.11,1.59c1.31,1.31,1.93,2.38,1.64,2.85s-1,0-2.42-1.59C51.85,169.17,51.49,168.09,52.11,168.21Zm-.14.22s.15.28.52.75c.79,1,1.28,1.32,1.28.82A3.9,3.9,0,0,0,52.72,169c-.48-.37-.72-.55-.75-.52Zm13.86.47a3.64,3.64,0,0,0-1.86.45c-3.53,1.83-8,8.28-8.71,12.58-.22,1.32-.53,2.87-.69,3.45-.33,1.22-.4,1.22,4.3.07a16.63,16.63,0,0,1,5.18-.58,3,3,0,0,0,2-.09,6,6,0,0,1,2.77-.23c1.31.1,2.38,0,2.38-.23a9.7,9.7,0,0,0-1.33-2.3c-.91-1.3-1-1.63-.3-1.07s1,.61,1,.34.87.31,1.93,1.28,1.57,1.3,1.14.74a1.76,1.76,0,0,1-.33-1.75c.26-.42.19-.56-.17-.34S72,181,71.4,180.27l-1.13-1.34,1.35,1.14c1.6,1.36,1.79.67.3-1.08-1-1.18-1-1.2,0-.43.58.45,1,.62,1,.37,0-.66,1.69.86,3,2.7.88,1.23.94,1.6.29,1.6-.46,0-.67-.27-.47-.59s.06-.41-.32-.17-.57.11-.37-.41a1.61,1.61,0,0,0-.6-1.61c-1.11-.92-1.25,0-.18,1.15.61.65.58.72-.15.33s-.6-.14.15.64c1.37,1.46,4.22,1.71,3.47.3-.62-1.16-5.67-6.67-5.13-5.59s0,.93-1-.26c-.47-.58-.52-.84-.11-.59,1.13.68,1.47-.58.4-1.47a16.78,16.78,0,0,1-2.42-3.1c-1.21-1.91-2.42-2.88-3.73-3Zm23.06.54a2.85,2.85,0,0,1,1.41.86c1.17,1.09,1.34,1.77,1.19,4.65-.13,2.33.11,3.85.78,4.88,1.15,1.8,1.92,4.8,1.23,4.8-.27,0-.83-.94-1.25-2.1-1-2.8-2.29-2.65-3.7.45S87,188.12,88.26,187c.76-.63.88-.44.82,1.28,0,1.11,0,3.18,0,4.61l.08,2.6,2.25-.33c1.24-.18,2.43-.33,2.65-.34.81-.05-2.06-9.35-3.18-10.33s-.72-2,.6-1.15c1.12.7,4.17,10,3.84,11.69-.25,1.32-.67,1.53-3.67,1.86-1.87.2-3.93.45-4.59.55l-1.65.27c-1,.18-.36-1.07.75-1.42s1.19-.88,1.15-4.09c0-2-.18-3.37-.35-3-.51,1.25-1.4.19-1.4-1.67a16.82,16.82,0,0,1,1.18-4.73l1.17-3-2.15-2.15c-1.83-1.84-2.09-2.43-1.77-4,.46-2.3,1.39-3.5,2.72-3.5a2.59,2.59,0,0,0,1.61-.6.64.64,0,0,1,.56-.19Zm13.92,1.14a2.8,2.8,0,0,1,.71.06c2.13.53,3,1.88,2.73,4.38a4,4,0,0,0,.92,3.31c1.76,1.9,2.63,4.63,1.64,5.18-.69.38-.68,1.19.06,5l.89,4.56,1.85-.18c1.72-.16,1.87-.36,2-2.74.13-1.71-.12-2.86-.75-3.49-1.11-1.11-1.26-5.68-.21-6.73.56-.56.56-.72,0-.72-1,0-.91-1.5.19-3.63.54-1,1.4-1.77,2.07-1.77a2.14,2.14,0,0,0,1.7-1c.46-.83.71-.72,1.72.75,1.59,2.32,2.65,8.52,2.42,14.16-.18,4.32-.11,4.65,1,4.65s1.19,0,0,.89c-.93.71-2.69.85-8.66.66-4.13-.13-7.5-.26-7.5-.29,0-.29-.24-4-.33-5.2-.19-2.4-1.43-.68-1.45,2,0,1.58-.29,2.24-.92,2.24-1.29,0-1.51-3.64-.33-5.44s2.3-1.85,3.55-.11c1,1.32,1,1.29.6-1.05-.76-4.82-2.35-5.85-4-2.55-.79,1.62-1,1.77-1.37.91-.55-1.36,1.42-4.73,3.33-5.7,1.46-.74,1.45-.74-.51-.75-2.27,0-4.92-2.25-4.92-4.16a3.72,3.72,0,0,1,3.44-3.3ZM87,171.09a.47.47,0,0,0-.46.21c-1.09,2-.91,3.77.52,5.2A11.52,11.52,0,0,0,88.8,178c.6,0,1.51-3.3,1.22-4.46A4.26,4.26,0,0,0,87,171.09Zm15.88,1.76c-.82.1-1.24.93-.88,2.07s1.76,2.09,2.38,1.47.31-3-.64-3.41a1.92,1.92,0,0,0-.48-.13,1.21,1.21,0,0,0-.38,0Zm14,1.58a4.54,4.54,0,0,0-1.61.84c-.9.66-1.16,1.65-1.23,4.65,0,2.22.2,4,.58,4.24s.71,2.22.77,4.4a25,25,0,0,0,.3,4.16c.11.11.53-.17.93-.61s.72-2.33.69-4.47c-.05-3.75.62-6,.75-2.51a17.35,17.35,0,0,0,.23,2.5,21.83,21.83,0,0,1,.22,2.7c0,1.16.34,2.1.66,2.1s.47-.34.32-.75-.39-3.92-.55-7.79c-.28-6.53-.92-9.46-2.06-9.46Zm-65.22.8h0c-1.2,0-1.09,1.22.22,2.41,1.53,1.38,2.32,1.25,1-.17-.58-.64-.9-1.41-.72-1.7s-.06-.54-.54-.54Zm-4.24.57a.46.46,0,0,1,.15.13c2.72,3.06,3.3,3.94,3.55,5.32.38,2.09.13,2-1.89-.67-.93-1.24-1.23-1.88-.67-1.42s1,.56,1,.18a1.36,1.36,0,0,0-.6-1,5.18,5.18,0,0,1-1.27-1.68c-.28-.55-.39-.86-.3-.85Zm.77,10.31c-.18,0,0,.42.64,1.27C50.27,189.46,52,191,52,190.29a5.53,5.53,0,0,0-1.34-1.9c-1.23-1.31-1.24-1.39-.15-1s1.11.35.31-.63c-.56-.68-1-.83-1.11-.39s-.49.48-1.2-.08a1,1,0,0,0-.31-.2Zm-7.73,4.82,1.86,2c1.42,1.49,1.87,1.71,1.87.92,0-2.35,1.68.78,2,3.72a36.7,36.7,0,0,0,1.59,6.6c.7,2,1.51,4.34,1.8,5.25.4,1.25.34,1.65-.27,1.65-1.14,0-4.25-8.54-4.88-13.4a11.82,11.82,0,0,0-2.09-4.21Zm5.31.71s0,.19.14.49c.94,1.91,2.44,3.67,2.46,2.88a5.88,5.88,0,0,0-1.52-2.4C46.2,191.92,45.84,191.6,45.75,191.64Zm44.62.79c.33,0,.6.42.6.94s-.27.77-.6.56a1.27,1.27,0,0,1-.6-.93A.59.59,0,0,1,90.37,192.43Zm-50.09.24a4.8,4.8,0,0,1,.85.88,5,5,0,0,1,1.23,2.1c0,.71-.81-.28-1.85-2.32-.24-.47-.33-.69-.23-.66ZM72,193.78s.09,0,.18.06a17.89,17.89,0,0,1,2.7,2.93c1.1,1.38,1.66,2.31,1.25,2s-.75-.16-.75.25-.25.5-.93-.06a1.62,1.62,0,0,1-.61-1.6c.2-.52.06-.68-.36-.42s-.52.16-.24-.3,0-1.28-.65-2c-.46-.52-.68-.87-.59-.91Zm2.78.45s.15.28.52.75c.79,1,1.28,1.32,1.28.82a4.08,4.08,0,0,0-1-1.05C75,194.38,74.8,194.2,74.77,194.23Zm-4.29.59a1,1,0,0,1,.64.53c.26.43.69.69.95.58s.57.48.68,1.3h0c.2,1.5.2,1.5-1.27-.27-.8-1-1.32-1.92-1.15-2.09a.17.17,0,0,1,.15-.05Zm25.94,3.09a1.73,1.73,0,0,1,.66.11c.48.19.34.34-.36.36s-1-.11-.79-.31a.75.75,0,0,1,.49-.16Zm2.65,0,3.92.13c3,.09,4.39.45,5.85,1.49,1.06.76,1.93,1.68,1.93,2s-.81-.09-1.79-1c-1.45-1.39-2.55-1.8-5.85-2.16Zm84.07,2,1.62,2c.89,1.1,1.49,2.21,1.34,2.45s.11.45.59.45c1.35,0,1.07-.58-1.34-2.83Zm3.63,1.79c-.23,0-.13.22.24.66.82,1,1,1,1.42.32.18-.29-.23-.68-.9-.85a2.44,2.44,0,0,0-.76-.13Zm-76.05,1.51c.14,0,0,.18-.47.75-1,1.31-3.32,1.89-12.29,3.16C84.84,209,80,211,73.66,217.48c-.78.79-1.57,1.27-1.76,1.08-.53-.52,3.94-4.9,7.37-7.22s10.49-4.21,19.43-5.13c6.22-.65,10.07-1.51,11.47-2.59A4.9,4.9,0,0,1,110.72,203.23ZM52.37,207a2,2,0,0,1,.56.12c1.06.41,1,.51-.37,1.59-2.37,1.82-3.22,1.33-1.58-.91a1.6,1.6,0,0,1,1.39-.8Zm132,2.51c-.17,0-.19.24,0,.64.4,1,.83,1.23.83.37a1.29,1.29,0,0,0-.59-.93.4.4,0,0,0-.21-.08ZM59.69,211c.18.06.17,1.1-.16,3.08-.72,4.38-.52,4.64,4.43,5.78,3.22.75,3.92.74,5.45,0,1-.48,1.76-.67,1.76-.41s-.61.76-1.35,1.13c-1.56.78-5.84.38-8.71-.82-2.41-1-3.13-2.77-2.42-5.94C59.13,211.82,59.5,210.9,59.69,211Zm-21.36,8a3.22,3.22,0,0,1,.82.36,4,4,0,0,1,1.63,1.58c.49,1.28.22,1.16-1.46-.66C38.49,219.34,38.17,219,38.33,219Zm9.19,16,1.74,1.81c2,2.13,2.11,2.15,2.11.67,0-.75-.67-1.37-1.93-1.81Zm22.37,35.11a1.06,1.06,0,0,1,.28.06c1.5.57,1.2,1.87-.55,2.31a11.24,11.24,0,0,0-3.81,2.76c-1.27,1.34-2.82,2.38-3.55,2.38-1.45,0-1.66-.72-.54-1.93a12.09,12.09,0,0,0,1.38-2c.78-1.44,5.19-3.71,6.79-3.58Zm199.65,6a6.81,6.81,0,0,1,1.88.8c3.64,1.86,6.75,6.34,6.75,9.74,0,2.93-1.76,1.93-4.19-2.37a34.4,34.4,0,0,0-3.48-5.18,4.67,4.67,0,0,1-1.33-2.36c0-.44.06-.65.37-.63Zm-53.14.68.7,1.86a3.73,3.73,0,0,0,1.78,2.14c1.57.41,1.34-.34-.7-2.29ZM88.31,285.48c.77,0-.21,1.56-2.71,4.24a30.11,30.11,0,0,0-3.72,4.69c-1.07,2.16-5.38,8-6.32,8.6a1.69,1.69,0,0,0-.79,1.29,1.41,1.41,0,0,1-.9,1.15,1.46,1.46,0,0,0-.9,1.24,3.62,3.62,0,0,1-1.08,2,15.06,15.06,0,0,0-2.24,3.77A62.08,62.08,0,0,1,66.84,318a16,16,0,0,0-1.67,3.45.63.63,0,0,1-.67.57c-.36,0-.51.39-.33.86a1.48,1.48,0,0,1-.48,1.52,5.12,5.12,0,0,0-1.2,2.26A5,5,0,0,1,61.08,329c-1.28,1-2,.77-2.54-.75s3-11.13,4.13-11.51c.38-.12.7-.78.7-1.45,0-1,2.94-5.5,6.33-9.63a4.31,4.31,0,0,0,.87-1.4,2.59,2.59,0,0,1,.75-1.09c.41-.42,2-2.2,3.45-4s3-3.49,3.33-3.85a18.49,18.49,0,0,0,1.72-2.45c1.07-1.76,6.7-6.92,8.06-7.37a1.13,1.13,0,0,1,.43-.08Zm151,9c1.29,0,2.57,1.37,4.69,4.92,1.13,1.89,4.1,6.75,6.61,10.8,5.75,9.31,6.73,11.32,7.74,15.76a25.25,25.25,0,0,0,1.2,4.2c.82,1.26,1.12,7.71.45,9.45-.22.58-.62,1.05-.89,1.05-1.13,0-2.67-2.72-3.17-5.6-.29-1.71-.7-3.77-.9-4.6s-.44-1.9-.52-2.4c-.79-4.51-1.19-6.07-1.64-6.35a2.5,2.5,0,0,1-.52-1.78c0-.81-.27-1.47-.6-1.47a.66.66,0,0,1-.6-.71c0-1-4.61-10.4-5.57-11.39a29.64,29.64,0,0,1-2.5-3.8c-.95-1.65-2.36-3.83-3.13-4.86-1.55-2.05-1.79-3.25-.65-3.22Z" />
                        <path class="main-path-loader-fill" d="M132.69,0c2.3-.06,5.2,1.61,6.83,4.25,1.32,2.15,2,5.79,1.88,10-.07,2.41.2,3.06,2.29,5.34l2.36,2.59,2-2.29c1.11-1.25,2.56-3,3.23-3.93l1.23-1.65,3,1.07a27.76,27.76,0,0,1,6.78,3.45c.15.1-.18.52-.72.93s-1.35,2.36-1.82,4.34a44.11,44.11,0,0,1-1.3,4.65c-.35.84-.08,1.13,1.31,1.41a3.87,3.87,0,0,1,2.33,1.35c.84,1.44.14,11-.82,11.35-.6.2-.7-.78-.45-4.43a44.85,44.85,0,0,1,.64-5.69c.35-1.11-1.08-1.48-8.12-2.12a15.08,15.08,0,0,1-4.65-.95c-.91-.74-1.07-.33-2.16,5.23a46.91,46.91,0,0,1-1.26,5.23c-.34.78-.06,1.12,1.13,1.42s1.49.67,1.24,1.45.08,1.16,1.33,1.45c2.26.53,6.77,2.82,6.77,3.45s.37.75-6.6-1.32A54.4,54.4,0,0,0,142.9,45c-.07.1-.48,1.8-.91,3.78s-.89,3.91-1,4.29.75,1,2,1.43c3.18,1,3.21,1,2.6,2.65a26.76,26.76,0,0,0-.9,4.93c-1,9.86-1.23,11-2.15,11s-.7-2.09.29-7.58c.47-2.59,1-5.71,1.22-6.91l.36-2.2-5.34-1.25c-2.94-.69-5.74-1.26-6.23-1.26s-1.13,1.16-1.64,3.75c-.4,2.07-1,4.5-1.25,5.41a38.05,38.05,0,0,0-.92,5.25c-.37,3.28-.31,3.59.74,3.59a5.22,5.22,0,0,1,2.47.94c1.22.85,1.34.84,1.34,0,0-.66.35-.87,1.05-.66,1.88.57,6.38,1.63,10,2.35,4.53.91,5.15,1.82,3.82,5.63A38,38,0,0,0,147,85.33c-.21,1.32-.51,2.88-.66,3.45h0c-.35,1.26-1.77,1.32-3.81.15a7.63,7.63,0,0,0-3.08-.88,21.62,21.62,0,0,1-4.73-1l-3.15-1,.37-4.53a48.78,48.78,0,0,1,.71-5.74c.26-.93,0-1.22-1-1.31-.76-.06-2.06-.23-2.88-.37l-2-.34c-.39-.06-.09-4.8.49-7.58.23-1.14,1-4.2,1.5-6.3.29-1.15.71-3.31.92-4.8a7,7,0,0,1,.78-2.86c2-.8,2.27-1.47,2.89-8.07.39-4,.38-4-1.35-4.71a27.35,27.35,0,0,0-5.13-1.11c-3.12-.38-3.43-.31-3.71.82-.17.68-.58,2.31-.9,3.63s-.76,3.73-1,5.36a18.86,18.86,0,0,1-.62,3.33c-.12.2.76.44,2,.52,2.29.15,4.55,1.65,4,2.61-.19.31-1.33.4-2.53.19s-2.67-.44-3.26-.53a4.39,4.39,0,0,1-2-1.12c-.89-.89-.89-1.29,0-4.89a37.79,37.79,0,0,0,1-4.8,9,9,0,0,1,.7-2.58,6.35,6.35,0,0,0,.59-2.16,3.76,3.76,0,0,1,.55-1.7c.52-1,1-1.14,2.26-.81a32.24,32.24,0,0,0,4.11.66l2.52.23-.33-2a6.11,6.11,0,0,1,.84-4c1.05-1.89,1.07-2.19.22-3.67-1-1.78-1.38-1.29,4.63-6.34a6.73,6.73,0,0,0,2.28-3.48c1.37-8.32-1.07-15.64-5-15.18-1.94.22-2.45,1.91-1.05,3.45.91,1,.91,1.11,0,1.46-1.59.61-1.9.46-2.63-1.32A4.68,4.68,0,0,1,130.66.66a3.48,3.48,0,0,1,2-.66Zm40.95,4.05a2.15,2.15,0,0,1,1.55.4c.23.23-.45,1.15-1.5,2.05-2.38,2-2.44,4.19-.22,8,2.58,4.41,7.33,7.92,7.58,5.6,0-.41.17-1.81.28-3.1a6.48,6.48,0,0,1,.82-3,2.7,2.7,0,0,0,.62-1.67c0-1.25,3.3-4.79,5.4-5.79,2.56-1.21,4.91-.63,6.42,1.61s2.31,5.55,1.69,7.12c-.32.82-.79.31-2.13-2.32-2.25-4.41-3.46-4.71-6.51-1.66a10.65,10.65,0,0,0-3.07,5.32c-.68,2.85-.44,4.55.56,3.93.27-.16,1.22.39,2.12,1.22,1.68,1.56,1.76,2.39.62,6.86-.31,1.22.1,2,2.21,4.11a23.09,23.09,0,0,0,4.39,3.54,11,11,0,0,1,2.1,1.28c.58.71,6,3,6.05,2.61,0-.24.11-1,.19-1.68.28-2.43,1.72-6.85,2.43-7.44.5-.41,1.43-.23,3,.55a17.44,17.44,0,0,0,5.11,1.46c4.19.45,6.21,1.51,5.78,3-.19.67-.52,2.41-.73,3.85-.36,2.44-.3,2.59.84,2.23a47,47,0,0,1,6.54-.66c2.92-.15,6-.4,6.82-.57s2.42-.45,3.55-.63a11.64,11.64,0,0,0,2.55-.65,17.78,17.78,0,0,1,3.35-.81,38.84,38.84,0,0,0,4.65-1.13c1-.34,4-1.32,6.71-2.17a49.81,49.81,0,0,0,7.5-3A12.09,12.09,0,0,1,264.26,31c.71,0,2.49-.77,10.05-4.28a12.44,12.44,0,0,1,3.41-1.13,1.68,1.68,0,0,0,1.3-.52c.3-.49,6.18-1.77,8.15-1.78l5.4-.07a32.1,32.1,0,0,1,10.5,1.22c1.32.33,3,.72,3.75.88,1.48.32,6.27,2.67,6.75,3.31A10.1,10.1,0,0,0,315.68,30c1.67.86,8.09,7.23,8.09,8a36,36,0,0,0,1.84,4.09c4.15,8.44,3,22.07-3,35.37a36.41,36.41,0,0,0-2.51,6.34,8.74,8.74,0,0,1-.85,1.8,79.41,79.41,0,0,0-4.17,12.58,14.6,14.6,0,0,1-.93,3c-.53,1-2.37,12.91-2.74,17.72-.12,1.65-.33,13.45-.46,26.22s-.38,23.43-.54,23.7a44.8,44.8,0,0,0-.68,6.45,76.93,76.93,0,0,1-.92,8.4c-.3,1.34-.71,3.78-.91,5.43a29,29,0,0,1-.88,4.5c-.28.83-.83,2.85-1.22,4.5a39,39,0,0,1-1.21,4.2c-1.12,2.72-3.59,9.66-3.59,10.1a26.17,26.17,0,0,1-1.5,3.76A22.29,22.29,0,0,0,298,220c0,.73-4.26,9.23-4.82,9.61s-1.78,2.43-4.62,7.43c-1.76,3.1-1.94,3.4-4.52,7.41a16.82,16.82,0,0,0-1.64,2.89,36.94,36.94,0,0,1-2.81,4.36c-3.37,4.8-12.4,13.7-17,16.76a46.51,46.51,0,0,0-4,2.91,19.1,19.1,0,0,1-3.45,2c-1.5.72-2.72,1.56-2.72,1.87s-.35.54-.77.54a21.17,21.17,0,0,0-4.35,1.78,18,18,0,0,1-4.9,1.8,2.27,2.27,0,0,0-1.65.57c-.46.75-7.94,2.41-12.53,2.79-2,.17-4.92.45-6.4.62s-6.35.51-10.8.75c-7.71.42-35.06.32-40.8-.14A200.21,200.21,0,0,1,145,279.78c-2.13-.49-4.83-1-6-1.25s-3.05-.59-4.2-.88-2.91-.68-3.9-.85-4.23-.86-7.2-1.52l-8.7-1.92a17.17,17.17,0,0,1-4-1.23,7.06,7.06,0,0,0-2.59-.73,5.34,5.34,0,0,1-2.56-.85,1.45,1.45,0,0,0-1.39-.33,1,1,0,0,1-1.17-.35,2.75,2.75,0,0,0-2-.64,8.68,8.68,0,0,1-3.35-.91c-1-.5-1.86-.79-2-.65-.83.83-22.07-8.69-27.52-12.33a17.18,17.18,0,0,0-4.06-2,3.81,3.81,0,0,1-2.15-1.38c-.3-.55-.63-.9-.74-.8-.45.45-2.83-.88-6.05-3.39-3.85-3-6.46-6.55-5.32-7.25.44-.27-.11-1-1.57-2.18-3.47-2.71-9.15-8.18-9.15-8.82a16.4,16.4,0,0,0-2.77-3.65c-2.87-3.19-4.1-5.48-3.49-6.47.2-.32,1.45,1,2.78,2.9s2.53,3.59,2.67,3.74.41-.33.61-1.07c.53-2,2.26-1.39,2.48.93.16,1.55.88,2.44,3.76,4.61,3.46,2.6,5.92,3.92,13.46,7.23,2,.87,4.11,1.86,4.73,2.21,1.23.69,6,2.09,13,3.85,2.31.58,11.49,3.3,14.93,4.42a25.81,25.81,0,0,0,5.15,1.25,3.12,3.12,0,0,1,1.74.42,2.58,2.58,0,0,0,1.25.54c.45.07,2.27.44,4,.82s4.26.83,5.57,1a11.89,11.89,0,0,1,2.94.65,14.18,14.18,0,0,0,4.59.86,22.32,22.32,0,0,1,3,.55c1.15.29,3.18.67,4.5.86,5.29.74,7.25,1.06,8.4,1.36.66.17,5.52.41,10.8.52a229.32,229.32,0,0,1,23.1,1.37c2.47.28,8.51.45,13.42.36,8.29-.14,8.95-.07,9.22,1,.17.62.58,1.12.93,1.12a3.78,3.78,0,0,1,1.73,1c1.31,1.19,1.42.39.18-1.25a4.28,4.28,0,0,1-.88-1.74c0-.73,3.77,4.22,4.73,6.2.58,1.19.34,1.07-1.1-.58-1-1.14-1.83-1.7-1.83-1.24s-.54.35-1.61-.62l-1.61-1.46,1.31,1.89c2.13,3.09,1.49,3.54-.79.55a14.61,14.61,0,0,1-2.1-3.26c0-.28-.69-.38-1.53-.22-1.39.27-1.44.38-.6,1.31,1.83,2,.88,2.56-1,.58-1.59-1.67-2-1.85-2.14-1-.23,1.19-1.31,1.43-1.32.29,0-.55-2-.79-7.65-.89-4.2-.08-11.15-.44-15.44-.79S147.1,259,142.75,259c-7.64.06-11.15-.3-20.39-2.12-2.37-.47-5.34-1-6.6-1.18-4.16-.61-26.62-5.79-29.59-6.84-1.71-.6-3-1-3.9-1.24-.33-.08-1.82-.53-3.3-1s-3.21-1-3.84-1.11-2-.54-3.06-.89-2.44-.75-3.06-.9a86.17,86.17,0,0,1-11.86-4.48c-3.91-1.8-6.08-2-3.83-.35a2.4,2.4,0,0,1,1,1.6c0,.68-.16.66-.75-.07-.92-1.12-2.23-1.43-2.23-.52,0,1.08,5.65,6.36,8.42,7.86,1.39.75,4.31,2.37,6.5,3.61s4.45,2.41,5,2.62,1.05.61,1.05.9.51.53,1.13.53a1.66,1.66,0,0,1,1.48.9,1.74,1.74,0,0,0,1.57.9c.67,0,1.22.22,1.22.49s1.82,1.13,4,1.92,4.72,1.77,5.55,2.2a6.9,6.9,0,0,0,2.43.79,2.47,2.47,0,0,1,1.5.57c.69.69,10.66,4.06,14.2,4.8,1.41.3,4,1,5.87,1.52s3.7,1.08,4.2,1.2a2.45,2.45,0,0,1,.9.32,9.8,9.8,0,0,0,1.8.36c1,.14,4.5.92,7.8,1.73s7.71,1.76,9.81,2.12a38.86,38.86,0,0,1,5.4,1.27,30.14,30.14,0,0,0,4.89,1.14c2.78.44,6.63,1.15,10.8,2,.49.1,2.52.4,4.5.66s4.13.56,4.77.68c1.15.21,12.69,1.06,15,1.11.89,0,1.16-.32,1-1.33-.18-1.72.34-1.74,1,0,.46,1.24.88,1.32,6.88,1.37,3.52,0,6.4-.09,6.4-.28a6.3,6.3,0,0,0-1-1.71c-.53-.76-.82-1.52-.65-1.69s.75.51,1.28,1.54c.95,1.83,2.13,2.49,2.13,1.17A10,10,0,0,0,197,278.3c-.88-1.45-1-1.91-.36-1.4a8.07,8.07,0,0,1,1.74,2.7c1,2.49,1.22,2.61,4.16,2.33,1.95-.18,2.39-.43,2.1-1.18s-.19-.8.77.08c1.44,1.3,3.55.75,2.41-.63a4.48,4.48,0,0,1-.88-1.83,8,8,0,0,0-1.37-2.61c-1.33-1.8-1.6-2.62-.67-2a19.55,19.55,0,0,1,2.49,3.93c1,2,2.21,3.61,2.57,3.65a50.43,50.43,0,0,0,5.07,0c.58-.05.38-.82-.71-2.77-.83-1.48-1.28-2.7-1-2.7s1.1,1.23,1.82,2.73c1.68,3.46,2.26,3,.86-.62a8.49,8.49,0,0,0-5.51-5.37c-1.83-.57-8-4.59-8-5.22,0-.29-.35-.52-.77-.52a3.26,3.26,0,0,1-1.76-1.05c-1.86-2-2.77-2.55-3-1.88s-6.48-8-6.48-8.9a3.67,3.67,0,0,0-.79-1.32,51.15,51.15,0,0,1-4.24-9.26,4.5,4.5,0,0,0-.45-1.29c-1.38-2.44-2.83-12.19-2.46-16.51.17-1.89,0-3.35-.48-3.92-.62-.74-.58-.83.23-.52,1.4.54,1.22-.57-.41-2.55a13.1,13.1,0,0,1-1.84-2.9c-.34-.94,0-.82,1.4.56,3,2.91,2.14.39-1-2.79-1.55-1.58-2.55-2.87-2.22-2.87a10.7,10.7,0,0,1,3,2.43c2.3,2.36,2.38,2.39,2.76,1.05.73-2.6.5-3.33-1.87-5.93-1.6-1.75-2.15-2.75-1.68-3,.85-.52,1.81,0,1.36.69a.74.74,0,0,0,.38.95c.44.27.54.18.28-.26-.71-1.13.36-.78,1.85.62.76.71,1.39,1,1.39.71a8.7,8.7,0,0,0-2.1-2.62,8.4,8.4,0,0,1-2.1-2.64c0-.33,1.08.45,2.4,1.74s2.4,2,2.4,1.66-.61-1.12-1.35-1.64c-.92-.65-1.13-1.09-.66-1.39,1.14-.71-1.8-3.6-4.66-4.59a8,8,0,0,0-2.92-.64,8,8,0,0,1-2.74-.28,92.42,92.42,0,0,0-10.77-1.54c-4.75-.41-7.47-.94-7.83-1.53-.74-1.19,14-.95,20.13.32a77.41,77.41,0,0,1,9,2.11c5.19,1.51,5.24,1.49,9.84-3.26a37.81,37.81,0,0,1,7.86-6.32c2-1.06,3.87-2.12,4.2-2.36,2-1.46,16.66-6.92,20.25-7.55l3.6-.63c4.23-.75,19.77-.36,29.44.73l3.5.39-1-2.34c-1.56-3.64-1.69-4.26-.64-3a12.85,12.85,0,0,1,1.67,3.15c.4,1.09,1.07,2,1.5,2,1,0,1,0-.44-3.33-1.79-4.19-1-4,1,.27l1.7,3.64,5.4-.19c5.4-.18,10.5-1.62,10.5-3a49.62,49.62,0,0,0-3.1-6.39c-1.71-3.16-2.67-5.39-2.15-5a31.61,31.61,0,0,1,3.51,6c1.4,2.87,2.62,5.31,2.71,5.43.32.43,4.19-2.58,6.83-5.3,4.84-5,8.91-12,9.91-17.12.13-.66.52-2.55.87-4.2.53-2.46,2-11.59,2.73-16.8.64-4.61,1-6.79,1.18-8.1.14-.82.4-2.71.58-4.2s.59-4.79.91-7.36l.59-4.65-2.71-4.59c-1.5-2.53-2.3-4.25-1.79-3.83a22.62,22.62,0,0,1,2.82,4.08l1.89,3.32,1-1.91c.54-1,1.16-1.73,1.37-1.52s.67-.79,1-2.23c1.23-5,5.61-18.22,6.42-19.39a4.68,4.68,0,0,0,.82-2.13,2.73,2.73,0,0,1,.71-1.66,3.29,3.29,0,0,0,.83-1.47,23.12,23.12,0,0,1,1.3-3.46c2.19-5,2.56-6,2.56-7.49a2.49,2.49,0,0,1,.5-1.75c1-.59,1.31-13.76.46-17.36-1.58-6.7-7.43-13.49-14.49-16.82-1.3-.61-3.13-1.52-4.06-2s-1.82-.76-2-.61a12.12,12.12,0,0,1-3.71-.53c-7.89-1.86-18.87-.59-26.38,3.05a20.84,20.84,0,0,1-3.73,1.52,61.08,61.08,0,0,0-6.75,2.92c-3.39,1.61-7.39,3.33-8.87,3.84-3.93,1.34-8,2.48-8.53,2.36a6.08,6.08,0,0,0-2,.5,20.54,20.54,0,0,1-4,.91,13.56,13.56,0,0,0-3.61,1c-1.82,1-15.52,1.44-17.13.58-.92-.49-1.31-.51-1.31,0s-.31.46-.68.23-.57-1.75-.36-4.28.08-3.93-.38-4.08a61.45,61.45,0,0,0-6.09-1.11,9.92,9.92,0,0,1-2.62-.94c-1.17-.63-1.52-.62-1.94.05a9,9,0,0,0-.58,4.53c.16,1.34-1.79,5.3-2.25,4.55a4.57,4.57,0,0,0-2.5-1.07c-2.23-.39-9-3.88-9-4.64,0-.25-.34-.46-.75-.47s-2.21-1.5-4-3.3c-2.11-2.14-3.73-3.29-4.65-3.29-1.92,0-1.8.6.52,2.53l2,1.62-1.14,2c-.62,1.08-2.19,4.06-3.48,6.62s-2.74,4.65-3.22,4.65-.86-.15-.86-.33c0-1,4.9-10.37,5.94-11.32l1.24-1.12-1.64-1.41a7,7,0,0,0-2.1-1.42,21.54,21.54,0,0,1-3.76-2.19,14,14,0,0,0-3.47-2,72.45,72.45,0,0,0-6,11.49c-.48,1.51-1.49,1.29-1.92-.42-.25-1,.07-2.06,1.07-3.44a32.36,32.36,0,0,0,2.26-3.64c.45-.91,1-1.65,1.25-1.65s.75-.79,1.15-1.76c1-2.48,1.93-2.6,5-.66,4.5,2.85,5.26,3.19,4.87,2.15-.22-.58.18-1.14,1.12-1.57,1.38-.63,1.42-.8.75-2.75-.56-1.63-1.36-2.39-3.66-3.47-3.54-1.66-7.75-7-8.36-10.64-.45-2.66.59-5.9,1.89-5.9.46,0,.83-.27.83-.6s.49-.54,1.07-.58Zm-20,12.58c-.55,0-.89.14-.89.45A10.19,10.19,0,0,1,151,19.63c-2.19,2.54-2.71,4.27-1.8,6a2.36,2.36,0,0,1,.32,1.84c-.19.31.27.69,1,.85s2.46.42,3.78.6l2.4.32,1.65-4.66C159.23,22,160,19.7,160,19.47a6.56,6.56,0,0,0-2.38-1.63,10.3,10.3,0,0,0-3.93-1.21ZM141,19.87a.24.24,0,0,0-.15,0,4.79,4.79,0,0,0-.9,2.33,7.72,7.72,0,0,1-1.57,3.28,5.31,5.31,0,0,0-1.19,1.68,18.45,18.45,0,0,1-2,3.17,19.55,19.55,0,0,0-2.67,5.11c-.57,2.09-.5,2.43.69,3.4s1.33,1.71,1.46,6.67c.07,3.08.14,5.78.15,6s.86.69,1.9,1,2,.66,2,.66a61.77,61.77,0,0,0,1.9-8.55c.24-1.72.59-2.25,1.49-2.25.64,0,1-.22.87-.48a6.73,6.73,0,0,1,.3-2.85c.33-1.3.72-3.18.87-4.17s.61-3.15,1-4.8c.62-2.48,1-3,2.07-2.95,1.28,0,1.28,0,.31-1.65-.55-.94-1.17-1.7-1.38-1.7a12.28,12.28,0,0,1-2.57-2.13A7.09,7.09,0,0,0,141,19.87Zm43.65,2.19c-.45-.07-.63.59-.35,1.92.54,2.55,1.13,3.11,2.06,2,.63-.76.59-1.19-.21-2.43-.62-.94-1.14-1.42-1.5-1.47Zm-48.79,1.55a4.9,4.9,0,0,0-1.49,1.08c-.89.82-1.46,1.66-1.26,1.86.4.4,2.88-2.05,2.88-2.85,0-.07-.05-.1-.13-.09Zm19.79,26c.05,0,.08.09.09.28.06,1.21,2.41,2.7,4.25,2.7a2.61,2.61,0,0,1,1.53.53,10.73,10.73,0,0,0,2.77,1.23c2.27.72,4,2.18,3.29,2.85-.2.2-2.52-.48-5.15-1.52-6.61-2.61-7-2.55-7.79,1.14a30.92,30.92,0,0,0-.65,3.9c0,.56-.62.87-1.73.87-1.29,0-1.82.35-2.09,1.35-.66,2.46-.41,2.88,2.47,4.12,2.6,1.11,2.75,1.29,1.77,2-1.19.87-3,.54-5-.89s-2.11-2.69-1.16-5.38c.47-1.32.66-2.37.43-2.34-1.66.24-3.12-.21-3.12-1,0-1.15,2.09-1.16,5.27,0l2.43.85.4-2.9c.45-3.26,1.62-7.77,2-7.79ZM135.5,74.07c-.6,0-.86,1-1.57,4.79-.53,2.87-.76,5.41-.51,5.65a13,13,0,0,0,3.45,1.15,53.36,53.36,0,0,1,5.85,1.78l2.85,1.09v-1.3a31.64,31.64,0,0,1,1.19-5.45c.86-3,1-4.37.54-4.93s-.82-.74-1-.7a13.23,13.23,0,0,1-2.49-.3c-1.16-.22-3.14-.54-4.4-.71a12.89,12.89,0,0,1-3.39-.9,1.21,1.21,0,0,0-.48-.17Zm174.21,33s-.1.06-.16.28h0a3.38,3.38,0,0,0,0,1.8c.16.41.28-.07.27-1.06,0-.62-.06-1-.14-1Zm-2.08,17.78c-.28.18-.71,2.42-.95,5s-.57,5.2-.73,5.86a26.45,26.45,0,0,0-.46,3.3c-.37,4.79-2.7,16.24-3.84,18.9-3.12,7.27-6,11.91-9.68,15.36-3,2.87-8.94,6.44-11.48,6.93a14.46,14.46,0,0,0-3.12.94c-1.49.77-9.86.72-15.7-.08-11.09-1.53-29.57-1.68-34.8-.29-2,.53-12.39,4.5-15.77,6a27.91,27.91,0,0,1-3.54,1.42,9.86,9.86,0,0,0-2.24,1.41,30.22,30.22,0,0,1-3.73,2.38c-2.2,1.13-7.42,5.87-7.42,6.73a6.17,6.17,0,0,1-1.5,2.21,6,6,0,0,0-1.5,2.24.67.67,0,0,1-.7.63c-.39,0-.52.18-.31.4a.86.86,0,0,1-.09,1.05c-1.45,1.92-3.47,9.86-4,15.95-.75,7.75-.6,13,.49,17.07,1.27,4.73,5.69,14.37,8.12,17.67,3.58,4.86,10.54,10.65,16.71,13.9,1.79.94,3.84,2.12,4.56,2.62.9.64,1.43.72,1.71.27s.53-.46.83,0-.31.94-1.48,1.34l-1.9.66,2.88,2.92h0c2.74,2.79,3,2.91,5.9,2.79a53,53,0,0,0,6.24-.71l3.21-.59-.31-2.13c-.18-1.17-.49-3.07-.7-4.23-.27-1.44-.21-1.81.18-1.2a14.58,14.58,0,0,1,1,4.05c.34,2.55.64,3.15,1.56,3.15,1.38,0,1.43-1,.3-5.25-.47-1.73-.63-3.15-.37-3.15.53,0,1.82,4.65,1.82,6.57,0,.83.39,1.23,1.2,1.23a2.49,2.49,0,0,0,1.19-.15c0-.08-.4-1.63-.89-3.45a27.44,27.44,0,0,1-.88-4.2c0-1.55.94.53,1.74,3.94.68,2.93.78,3,2.52,2.78,2.36-.35,2.65-1.28,1.48-4.72a18.83,18.83,0,0,1-.94-3.46c0-1.27,1.71,2.41,2.09,4.6.34,1.94.54,2.17,1.48,1.67s1-.92.51-2.85c-1.24-4.82-1.28-5.14-.63-4.74.36.22,1,1.89,1.39,3.71.48,2.14.94,3.11,1.32,2.73s.23-2-.42-4.6c-.56-2.2-.87-4.15-.7-4.32.45-.45,1.54,2.7,1.94,5.61l.34,2.53,2.05-.86a47.5,47.5,0,0,0,6.38-3.93c9.6-6.83,12.79-9.89,18.79-18,2.87-3.9,2.87-4,.73-8.77-1.84-4.09-.81-3.6,1.28.62,2.28,4.57,1.82,2.32-.59-3-.95-2.06-1.49-3.75-1.21-3.75.64,0,3.63,5.67,3.63,6.89,0,.5.27.91.6.91,1,0,.68-1.68-.94-4.88-2.06-4.05-1.42-4.45.83-.52,1,1.71,1.94,2.84,2.14,2.51s-.59-2-1.75-3.74c-2.77-4.11-2.39-5.23.41-1.23,1.9,2.72,2.24,3,2.95,2.11s.62-1.64-.28-5.14c-1.37-5.33-.83-6,.77-1,.68,2.16,1.2,3.16,1.21,2.31a14.61,14.61,0,0,0-.86-3.9,12.92,12.92,0,0,1-.82-3.3c.05-1.19,2.3,3.6,2.32,5,0,.58.32,1,.68,1s.54-.34.39-.75c-1.4-3.8-2.92-9-2.7-9.2.39-.39,2.85,6.21,2.85,7.64,0,2.34,1.23.69,5.48-7.38,1.43-2.7,1.5-3.16.78-4.61-1.72-3.45-3.93-10-3.07-9.1s1.54,2.7,3.76,9c.26.75.39.76.83,0a2.05,2.05,0,0,0-.29-2.08c-1.23-1.9-4.57-10.62-4.34-11.32.12-.33,1.33,2.19,2.69,5.62,1.82,4.54,2.6,5.93,2.91,5.13s-.31-3-1.44-6a23.41,23.41,0,0,1-1.6-5.13c.33-.33,3.28,5.93,3.28,7a.71.71,0,0,0,.62.75c.87,0,1.91-3,1.33-3.82-.8-1.11-2.71-7-2.38-7.35s1.37,2.4,2.66,6.37c.17.5.92-1.05,1.69-3.44l1.39-4.34-2-4.81c-1.12-2.65-1.89-4.81-1.72-4.81a20.55,20.55,0,0,1,2.23,4.05c2.21,4.67,3.11,3.52,1-1.32-1.56-3.65-1.05-4.44.57-.87s1.57,1.48,0-2.6a24.52,24.52,0,0,1-1.2-3.73c0-1.11,1.06.57,1.78,2.82.39,1.24,1,2.25,1.27,2.25.71,0,.7-1,0-2.35-1-1.85-3-7.25-2.73-7.25a17.62,17.62,0,0,1,2.06,3.45c1.41,2.73,1.79,3.14,1.81,2a18.29,18.29,0,0,0-1.79-5.34c-1-2.12-1.7-4.14-1.56-4.5s.94.83,1.78,2.64,1.55,3,1.57,2.61A26,26,0,0,0,304,177.1c-2.31-5.15-1.87-5.78.61-.87s3,4.23.64-.92c-2.06-4.54-2-4.48-1.29-4.48.3,0,1,1.26,1.62,2.8s1.16,2.5,1.28,2.14-.49-2-1.36-3.75c-1.83-3.62-1.58-4.8.29-1.4,1.29,2.33,1.36,1.82.33-2.19l-.38-1.5,1,1.5,1,1.5-.26-1.5a20.81,20.81,0,0,0-1.24-3.75c-1.14-2.61-.82-3,.49-.6l.89,1.65v-1.5a9.64,9.64,0,0,0-1.12-3.6l-1.12-2.1-.45,1.8a5.14,5.14,0,0,1-.87,2.1,15.46,15.46,0,0,0-1.67,3.15c-.69,1.57-1.53,2.85-1.87,2.85-.73,0,.2-2.79,1.4-4.2s5.08-14.18,5.66-18.53c.69-5.16.81-21.19.16-20.81ZM38.54,133.11a2,2,0,0,1,.34,0c1.35.19,2,1.63.79,1.75-3.56.35-5.21,6.56-3.66,13.74.33,1.55,2.82,4,5.54,5.44,1.43.77,1.63.71,2.73-.8,1-1.33,1.66-1.64,3.71-1.64a8,8,0,0,1,3.77.88c1.13.8,1.37.77,2.33-.3A3.7,3.7,0,0,1,55.66,151c1,0,.5,1.74-.7,2.58a2.25,2.25,0,0,0-1,2.29c.25,1.63.64,1.71,2.91.58s4.59-.41,5,1.61a12.13,12.13,0,0,0,.91,2.68c.88,1.64.67,2.65-.78,3.61-1.17.78-1.24,1-.51,1.89.46.55,1.13.9,1.49.77a9.06,9.06,0,0,1,3.21.52l2.55.76v-2.85c0-3.19,1.09-4.56,3.6-4.54h1.5l0,6.6c0,6.27.11,6.74,1.78,9.3,4,6.14,4.53,7.78,2.67,8.19a49,49,0,0,1-11.16,1.47,40.16,40.16,0,0,0-6,.48c-1.19.33-1.24.48-.49,1.51s1.16,1.1,4.91.46c2.23-.37,6.14-.83,8.69-1,5.55-.38,5.75-.16,6.4,6.66.44,4.52.13,6.11-1,5.39-.64-.4-1.54-5.16-1.54-8.19,0-1.06-.34-1.56-1.12-1.61s-1,.08-.42.75a1.44,1.44,0,0,1,.29,1.49,1.49,1.49,0,0,0,.32,1.53c.4.48.59.87.42.87a10.79,10.79,0,0,1-2-2.2c-.92-1.21-1.32-2-.89-1.72s.7.23.54-.24-.44-.71-.68-.68-.86,0-1.38,0,0,1.13,2,3.42c1.6,1.88,2.53,3.19,2.07,2.91s-.73-.24-.52.34.55.78.85.72.59.43.64,1.09c.08,1-.11.93-1.18-.49-.69-.93-2-2.49-2.81-3.46s-1.08-1.42-.5-1c1.67,1.27,1.22-.16-.61-1.91-1.64-1.58-2.62-1.71-6.14-.83-.83.21-2.58.52-3.9.69a49,49,0,0,0-5.4,1.13l-3,.82.19,3.83a48.56,48.56,0,0,0,.6,5.7l.41,1.87,4.2-2c2.92-1.41,4.92-2,6.56-1.9,1.3.06,2.46-.18,2.58-.54s.79-.51,1.49-.33c1,.27,1.2.14.86-.74s-.28-1,.5-.33.91.61.91,0,.3-.37.81.32,1.1.93,1.46.7a.73.73,0,0,1,1,.17c.48.78-.33,1.19-3,1.54a6.71,6.71,0,0,0-2.89.9,6.85,6.85,0,0,1-3.34.62A14.51,14.51,0,0,0,60.67,205a22.65,22.65,0,0,1-4.2,1.78c-1.51,0-3.89-5.3-3.91-8.62,0-1.11-.19-1.56-.47-1.12-.7,1.09-4.92.27-4.94-1a7.69,7.69,0,0,0-1.8-3.08c-1-1.15-1.62-1.62-1.42-1.05q.82,2.37-1.55-.9c-1.32-1.82-1.33-1.87-.11-.8,1.55,1.36,1.72.66.26-1.1-.57-.69-.17-.45.9.51s1.94,1.52,2,1.21,1.1.61,2.43,2c2.3,2.47,2.48,2.55,3.28,1.5a4.33,4.33,0,0,0,.86-1.87.73.73,0,0,1,.66-.75c.34,0,.43-.32.19-.72-.35-.55-.51-.54-.7,0s-.55.49-1.39-.27c-.63-.57-1.14-.75-1.14-.41a2.36,2.36,0,0,0,.9,1.36,2.41,2.41,0,0,1,.9,1.36c0,.33-.57-.12-1.27-1s-1.41-1.46-1.59-1.28.18.93.81,1.68l1.15,1.35-1.4-1.19a10.17,10.17,0,0,1-2-2.4c-.58-1.08-.54-1.12.35-.38,1.31,1.08,1.28.2,0-1.38-.76-.91-.6-.85.59.21.91.8,1.65,1.18,1.65.84a3.58,3.58,0,0,0-1.21-1.7,2.38,2.38,0,0,1-.89-2.09c.18-.58-.31-1.57-1.19-2.4a5.1,5.1,0,0,1-1.51-2c0-.33,1,.54,2.17,1.93s2.32,2.39,2.51,2.21-.44-1.15-1.39-2.13c-1.11-1.16-1.41-1.8-.85-1.8.92,0,4.58,5.34,4.28,6.24s2.38,3.36,3.55,3.36c1.49,0,2-1.06,1-2.27-.58-.76-.43-.72.57.13,1.18,1,1.47,1,2.22.3,1.58-1.58.28-2.32-2.85-1.61-2.45.56-2.73.78-2.1,1.6s.42.69-.5-.09-1.21-1.65-1.09-5.7c.14-4.49.07-4.73-1.75-6.63-1.37-1.43-1.84-2.44-1.72-3.65.19-1.79-1.19-3.46-2.3-2.77a4.59,4.59,0,0,0-1.22,1.87c-.54,1.41-.61,1.43-2.36.53-1-.52-1.82-.73-1.83-.47s-.55-.17-1.2-.95-1-1.67-.82-2a2,2,0,0,0,0-1.5c-.28-.71-.56-.78-1.16-.28-.93.77-1.59.3-1.59-1.13s-2-3-4-3.17c-1.6-.12-1.71,0-1.53,1.82.15,1.63-.07,2.05-1.35,2.54-1.6.6-2,1.47-.94,2.11a1.12,1.12,0,0,1-.64,2.1,6.33,6.33,0,0,0-2.47.66c-.82.44-1.42.46-1.83,0-.7-.7-2.26-.26-2.26.64a8.31,8.31,0,0,0,2.18,2.6c2.3,2.11,2.43,3.86.27,3.86a2,2,0,0,0-1.55.6,2,2,0,0,1-1.53.6c-1.48,0-3.57,1.78-3.57,3s1.7,3.2,3.15,3.74c1.29.47,1.36,1.82.15,2.82s-1.1,2.15,1,4.11l1.89,1.76-1.23,1.32a4.28,4.28,0,0,0-1.05,3.73c.18,2.54,2.37,6.16,3.34,5.56.32-.19,1.36.2,2.32.89a9.84,9.84,0,0,0,2,1.23,5.34,5.34,0,0,0,1.06-1.95c1-2.62,1-2.59,2.41-1.31s4.2,1.57,4.86.61c.23-.32,0-1.31-.43-2.2-.73-1.41-.72-1.68,0-2a2,2,0,0,0,.89-1.78c0-1.42,1.3-3.09,1.92-2.48.17.17.65-.1,1.07-.6,1.5-1.81,2.34-1.06,2.32,2a11.88,11.88,0,0,0,.33,3.54,12.72,12.72,0,0,1,.68,3.13,59.29,59.29,0,0,0,1.5,7.46c.27.94-.7,4-2,6.1h0l-1.13,1.93-2.07-2.29c-2.58-2.85-2.7-3.86-.18-1.5,1.58,1.49,1.77,1.55,1.17.41-.38-.74-.95-1.35-1.27-1.35a.63.63,0,0,1-.58-.66c0-.38.44-.5,1-.27.89.34.88.23-.09-.84-1.87-2.07-.44-2.39,2.2-.5.56.4,1.17.58,1.36.39s-.34-3.15-1.17-6.58a71.78,71.78,0,0,1-1.51-7.29c0-1.1-.9-1.42-1.45-.52a20.76,20.76,0,0,0-.61,4.27,19.17,19.17,0,0,1-.57,4c-.46.45-2.88.44-5.25,0-1.88-.37-2.22-.27-2.49.78C30.58,210.64,30,211,29,211c-2,0-7.56-3.08-8.95-4.92s-1.53-6.73-.18-8.23c1-1,.93-1.21-.52-2.77-1.66-1.8-1.86-2.74-.92-4.49.49-.92.34-1.28-.75-1.86a7.52,7.52,0,0,1-2.09-1.68,5,5,0,0,1-.31-4.57c1-1.41,4-3.28,5.26-3.28,1.78,0,2.3-1.49.87-2.5-2.68-1.88-1.64-6.1,1.43-5.86s4-.05,4-1.16a2.83,2.83,0,0,1,.91-1.89c.63-.52.8-1.34.56-2.64-.57-3,2.32-5,5.45-3.68,1.64.67,1.91.59,3.39-1s1.66-1.71,3.77-.82c1.27.53,2,.63,1.75.23a5.49,5.49,0,0,1-.36-2.33c0-1.39-.38-1.86-2.57-2.89C36,153,34.21,151,33.38,147.49c-1.44-6,1.62-14.34,5.16-14.38Zm27,.55c1.46,0,3.64,1.12,5.25,2.84l1.67,1.76,2.13-1c2.53-1.23,4.08-.94,5.34,1,1.87,2.85-.58,5.88-4.19,5.19-2.84-.54-1.86,1.4,1.74,3.47q5.64,3.23,5.65,7.64c0,2.19-1.35,5.25-2.54,5.72-1.67.67-2.47-.23-1-1.13a7.33,7.33,0,0,0,1.53-2.49c1.29-3.08.25-5.64-3.23-7.94a18.06,18.06,0,0,0-3.17-1.84c-.22,0-.72,1-1.1,2.33A7.9,7.9,0,0,1,72,152.29c-.83.69-1.17.57-2.4-.86a5.9,5.9,0,0,1-1.43-3.1c0-1.54,2-3.3,3.73-3.3,1.44,0,1.4-2.38-.07-5.27a10.47,10.47,0,0,0-5.16-5.13c-1-.52-1.48-1-1.09-1Zm12.9,4.19c-2.47.05-4.17,3.05-2.16,3.82,1.5.58,2.45.43,3.22-.51C80.48,140,79.78,137.83,78.48,137.85Zm13.44,5.86c2.36-.06,5.65.7,5.65,1.31s-3.35,1.81-5.12,1.81c-.9,0-1.54.54-2,1.65-1.78,4.6-2.51,10.35-1.3,10.35a.69.69,0,0,1,.6.75c0,2.23,5.52,5.89,9,6,2.37.06,7-2.35,7.49-3.95.42-1.27.43-1.27.7.12.47,2.39-2.93,5.34-7,6.11-3.93.74-6.83-.24-10.41-3.54a12.66,12.66,0,0,1-3.34-12.72c.41-1.46.84-3.14,1-3.73.35-1.88,2.89-4.1,4.75-4.15ZM72,146.23c-1.82,0-2.71,1.61-1.88,3.42.35.76.82,1.38,1.06,1.38.74,0,1.6-1.42,1.91-3.15.26-1.41.1-1.65-1.09-1.65ZM61.49,148c.73,0,1,.45.85,1.21s-.82,1.2-2.31,1.2c-2.53,0-3.07-.82-1.12-1.71a7.41,7.41,0,0,1,2.24-.69Zm246.16,2.42c-.06,0-.12,0-.19.15a3.87,3.87,0,0,0-.48,1.76,1.69,1.69,0,0,0,.47,1.31c.26.16.48-.63.48-1.76,0-.92-.11-1.44-.28-1.46Zm-207.8,1.29c.19.07.36.47.66,1.25.7,1.85,1.85,2.22,1.87.6,0-.85.11-.88.54-.2a2.08,2.08,0,0,1,.23,1.65c-.17.44-1.08.8-2,.8-2.19,0-3.26-1.74-2.07-3.36C99.44,151.93,99.66,151.66,99.85,151.73Zm-52.1,1.35c-.85,0-1.18.23-1.18.71s-.68,1.13-1.5,1.44a2.46,2.46,0,0,0-.6,4.2c.9.75,1.2,2.49.55,3.15-.19.19-1.3-.05-2.46-.53-3-1.26-3.9-.9-4.13,1.65-.16,1.8,0,2.28,1.23,2.82a2.81,2.81,0,0,1,1.62,2.62c.24,2.56,1.9,3,3.56.84,1.38-1.75,2.69-1.95,4.52-.67.65.46,1.32.71,1.53.58l-1.35-1.29c-.77-.74-1.29-1.45-1.14-1.59s.78.45,1.4,1.33l1.1,1.54h0c.17-.17,1,.58,1.79,1.67,2.35,3.18,2.54,4,.36,1.5-2-2.24-2-2.26-2.1-.78-.06,1.11.25,1.55,1.18,1.69a2.17,2.17,0,0,1,1.65,1.68c.39,1.47.42,1.46,1.36-.67A5.65,5.65,0,0,1,57,172.42c1-.36,1.34-1.71.42-1.44-.71.22-3.4-3.1-3.25-3.87l1.36,1.62c.82,1,1.57,1.92,1.65,2.05s.15,0,.15-.34a5.27,5.27,0,0,0-1.65-2.05l-1.49-1.32,0,0-.14-.18.16.14a.18.18,0,0,1,.06-.09c.3-.19,1.4.62,2.44,1.81,1.53,1.74,2.05,2,2.75,1.43s.7-1,.25-1.85c-.33-.63-.46-1.14-.27-1.14s-.09-.65-.61-1.44c-.75-1.13-.78-1.5-.16-1.72s.35-.77-.72-2l-1.5-1.73,1.8,1.58c1,.86,2.13,1.45,2.55,1.3,1-.35,1-2.12,0-3.06-.4-.39-.53-.72-.28-.72s.15-.54-.2-1.2c-.85-1.58-2.64-1.52-3.74.13-.85,1.29-.93,1.3-2.47.29a3.36,3.36,0,0,1-1.59-2.12c0-1.86-1.47-3.19-3.78-3.4a8.12,8.12,0,0,0-1,0Zm258.79,1.22c-.25,0-.22.71.19,1.78s1.44,1.32,1.44.47a4.5,4.5,0,0,0-.88-1.65c-.34-.45-.59-.63-.75-.6Zm-.59,2.46c-.09,0-.14.08-.14.27a6.42,6.42,0,0,0,.86,2.4c.49.87.86,1.12.86.6a6.54,6.54,0,0,0-.86-2.4C306.36,157.09,306.1,156.79,306,156.76Zm-247.6,1.85a4.25,4.25,0,0,1,.76.82,5.71,5.71,0,0,1,1.24,2.1c0,.64-.83-.44-1.84-2.4-.21-.4-.26-.57-.16-.52Zm-5.51,1.23a10.21,10.21,0,0,1,2.75,2c1.47,1.29,2.44,2.36,2.16,2.38s-.06.73.51,1.6.73,1.39.37,1.16-.66-.14-.66.19a1.31,1.31,0,0,0,.6,1,1.4,1.4,0,0,1,.6,1.05c0,.37-1-.5-2.25-1.93-3.22-3.72-3.7-4.86-1-2.42s1.73.89-1.47-2.54c-1.61-1.71-2.08-2.56-1.6-2.45Zm61.6,1.62a2.84,2.84,0,0,1,1.47.64c1.23.81,1.46,1.44,1.46,4a12,12,0,0,1-.62,4.18c-.34.64-1,1.16-1.37,1.16-1.32,0-3.23-1.7-4-3.56-1-2.35-.41-4.44,1.52-5.71A3.16,3.16,0,0,1,114.44,161.46Zm-59.36.37c-.16,0,.19.54.79,1.2a4.85,4.85,0,0,0,1.38,1.2c.17,0-.18-.54-.78-1.2A4.7,4.7,0,0,0,55.08,161.83Zm16.73.9c-.62,0-.91,1-1,3.51-.13,2.39.09,3.91.7,4.78.85,1.21.9,1.11,1-1.86C72.71,162.92,72.69,162.73,71.81,162.73Zm42.9,1.14a1.25,1.25,0,0,0-.49.09c-1.5.57-1.84,2.43-.75,4.09,1.24,1.9,2.69,2.49,2.71,1.11a10.38,10.38,0,0,1,.33-2.23C116.88,165.51,115.84,163.92,114.71,163.87Zm-62.6,4.34a5.81,5.81,0,0,1,2.11,1.59c1.31,1.31,1.93,2.38,1.64,2.85s-1,0-2.42-1.59C51.85,169.17,51.49,168.09,52.11,168.21Zm-.14.22s.15.28.52.75c.79,1,1.28,1.32,1.28.82A3.9,3.9,0,0,0,52.72,169c-.48-.37-.72-.55-.75-.52Zm13.86.47a3.64,3.64,0,0,0-1.86.45c-3.53,1.83-8,8.28-8.71,12.58-.22,1.32-.53,2.87-.69,3.45-.33,1.22-.4,1.22,4.3.07a16.63,16.63,0,0,1,5.18-.58,3,3,0,0,0,2-.09,6,6,0,0,1,2.77-.23c1.31.1,2.38,0,2.38-.23a9.7,9.7,0,0,0-1.33-2.3c-.91-1.3-1-1.63-.3-1.07s1,.61,1,.34.87.31,1.93,1.28,1.57,1.3,1.14.74a1.76,1.76,0,0,1-.33-1.75c.26-.42.19-.56-.17-.34S72,181,71.4,180.27l-1.13-1.34,1.35,1.14c1.6,1.36,1.79.67.3-1.08-1-1.18-1-1.2,0-.43.58.45,1,.62,1,.37,0-.66,1.69.86,3,2.7.88,1.23.94,1.6.29,1.6-.46,0-.67-.27-.47-.59s.06-.41-.32-.17-.57.11-.37-.41a1.61,1.61,0,0,0-.6-1.61c-1.11-.92-1.25,0-.18,1.15.61.65.58.72-.15.33s-.6-.14.15.64c1.37,1.46,4.22,1.71,3.47.3-.62-1.16-5.67-6.67-5.13-5.59s0,.93-1-.26c-.47-.58-.52-.84-.11-.59,1.13.68,1.47-.58.4-1.47a16.78,16.78,0,0,1-2.42-3.1c-1.21-1.91-2.42-2.88-3.73-3Zm23.06.54a2.85,2.85,0,0,1,1.41.86c1.17,1.09,1.34,1.77,1.19,4.65-.13,2.33.11,3.85.78,4.88,1.15,1.8,1.92,4.8,1.23,4.8-.27,0-.83-.94-1.25-2.1-1-2.8-2.29-2.65-3.7.45S87,188.12,88.26,187c.76-.63.88-.44.82,1.28,0,1.11,0,3.18,0,4.61l.08,2.6,2.25-.33c1.24-.18,2.43-.33,2.65-.34.81-.05-2.06-9.35-3.18-10.33s-.72-2,.6-1.15c1.12.7,4.17,10,3.84,11.69-.25,1.32-.67,1.53-3.67,1.86-1.87.2-3.93.45-4.59.55l-1.65.27c-1,.18-.36-1.07.75-1.42s1.19-.88,1.15-4.09c0-2-.18-3.37-.35-3-.51,1.25-1.4.19-1.4-1.67a16.82,16.82,0,0,1,1.18-4.73l1.17-3-2.15-2.15c-1.83-1.84-2.09-2.43-1.77-4,.46-2.3,1.39-3.5,2.72-3.5a2.59,2.59,0,0,0,1.61-.6.64.64,0,0,1,.56-.19Zm13.92,1.14a2.8,2.8,0,0,1,.71.06c2.13.53,3,1.88,2.73,4.38a4,4,0,0,0,.92,3.31c1.76,1.9,2.63,4.63,1.64,5.18-.69.38-.68,1.19.06,5l.89,4.56,1.85-.18c1.72-.16,1.87-.36,2-2.74.13-1.71-.12-2.86-.75-3.49-1.11-1.11-1.26-5.68-.21-6.73.56-.56.56-.72,0-.72-1,0-.91-1.5.19-3.63.54-1,1.4-1.77,2.07-1.77a2.14,2.14,0,0,0,1.7-1c.46-.83.71-.72,1.72.75,1.59,2.32,2.65,8.52,2.42,14.16-.18,4.32-.11,4.65,1,4.65s1.19,0,0,.89c-.93.71-2.69.85-8.66.66-4.13-.13-7.5-.26-7.5-.29,0-.29-.24-4-.33-5.2-.19-2.4-1.43-.68-1.45,2,0,1.58-.29,2.24-.92,2.24-1.29,0-1.51-3.64-.33-5.44s2.3-1.85,3.55-.11c1,1.32,1,1.29.6-1.05-.76-4.82-2.35-5.85-4-2.55-.79,1.62-1,1.77-1.37.91-.55-1.36,1.42-4.73,3.33-5.7,1.46-.74,1.45-.74-.51-.75-2.27,0-4.92-2.25-4.92-4.16a3.72,3.72,0,0,1,3.44-3.3ZM87,171.09a.47.47,0,0,0-.46.21c-1.09,2-.91,3.77.52,5.2A11.52,11.52,0,0,0,88.8,178c.6,0,1.51-3.3,1.22-4.46A4.26,4.26,0,0,0,87,171.09Zm15.88,1.76c-.82.1-1.24.93-.88,2.07s1.76,2.09,2.38,1.47.31-3-.64-3.41a1.92,1.92,0,0,0-.48-.13,1.21,1.21,0,0,0-.38,0Zm14,1.58a4.54,4.54,0,0,0-1.61.84c-.9.66-1.16,1.65-1.23,4.65,0,2.22.2,4,.58,4.24s.71,2.22.77,4.4a25,25,0,0,0,.3,4.16c.11.11.53-.17.93-.61s.72-2.33.69-4.47c-.05-3.75.62-6,.75-2.51a17.35,17.35,0,0,0,.23,2.5,21.83,21.83,0,0,1,.22,2.7c0,1.16.34,2.1.66,2.1s.47-.34.32-.75-.39-3.92-.55-7.79c-.28-6.53-.92-9.46-2.06-9.46Zm-65.22.8h0c-1.2,0-1.09,1.22.22,2.41,1.53,1.38,2.32,1.25,1-.17-.58-.64-.9-1.41-.72-1.7s-.06-.54-.54-.54Zm-4.24.57a.46.46,0,0,1,.15.13c2.72,3.06,3.3,3.94,3.55,5.32.38,2.09.13,2-1.89-.67-.93-1.24-1.23-1.88-.67-1.42s1,.56,1,.18a1.36,1.36,0,0,0-.6-1,5.18,5.18,0,0,1-1.27-1.68c-.28-.55-.39-.86-.3-.85Zm.77,10.31c-.18,0,0,.42.64,1.27C50.27,189.46,52,191,52,190.29a5.53,5.53,0,0,0-1.34-1.9c-1.23-1.31-1.24-1.39-.15-1s1.11.35.31-.63c-.56-.68-1-.83-1.11-.39s-.49.48-1.2-.08a1,1,0,0,0-.31-.2Zm-7.73,4.82,1.86,2c1.42,1.49,1.87,1.71,1.87.92,0-2.35,1.68.78,2,3.72a36.7,36.7,0,0,0,1.59,6.6c.7,2,1.51,4.34,1.8,5.25.4,1.25.34,1.65-.27,1.65-1.14,0-4.25-8.54-4.88-13.4a11.82,11.82,0,0,0-2.09-4.21Zm5.31.71s0,.19.14.49c.94,1.91,2.44,3.67,2.46,2.88a5.88,5.88,0,0,0-1.52-2.4C46.2,191.92,45.84,191.6,45.75,191.64Zm44.62.79c.33,0,.6.42.6.94s-.27.77-.6.56a1.27,1.27,0,0,1-.6-.93A.59.59,0,0,1,90.37,192.43Zm-50.09.24a4.8,4.8,0,0,1,.85.88,5,5,0,0,1,1.23,2.1c0,.71-.81-.28-1.85-2.32-.24-.47-.33-.69-.23-.66ZM72,193.78s.09,0,.18.06a17.89,17.89,0,0,1,2.7,2.93c1.1,1.38,1.66,2.31,1.25,2s-.75-.16-.75.25-.25.5-.93-.06a1.62,1.62,0,0,1-.61-1.6c.2-.52.06-.68-.36-.42s-.52.16-.24-.3,0-1.28-.65-2c-.46-.52-.68-.87-.59-.91Zm2.78.45s.15.28.52.75c.79,1,1.28,1.32,1.28.82a4.08,4.08,0,0,0-1-1.05C75,194.38,74.8,194.2,74.77,194.23Zm-4.29.59a1,1,0,0,1,.64.53c.26.43.69.69.95.58s.57.48.68,1.3h0c.2,1.5.2,1.5-1.27-.27-.8-1-1.32-1.92-1.15-2.09a.17.17,0,0,1,.15-.05Zm25.94,3.09a1.73,1.73,0,0,1,.66.11c.48.19.34.34-.36.36s-1-.11-.79-.31a.75.75,0,0,1,.49-.16Zm2.65,0,3.92.13c3,.09,4.39.45,5.85,1.49,1.06.76,1.93,1.68,1.93,2s-.81-.09-1.79-1c-1.45-1.39-2.55-1.8-5.85-2.16Zm84.07,2,1.62,2c.89,1.1,1.49,2.21,1.34,2.45s.11.45.59.45c1.35,0,1.07-.58-1.34-2.83Zm3.63,1.79c-.23,0-.13.22.24.66.82,1,1,1,1.42.32.18-.29-.23-.68-.9-.85a2.44,2.44,0,0,0-.76-.13Zm-76.05,1.51c.14,0,0,.18-.47.75-1,1.31-3.32,1.89-12.29,3.16C84.84,209,80,211,73.66,217.48c-.78.79-1.57,1.27-1.76,1.08-.53-.52,3.94-4.9,7.37-7.22s10.49-4.21,19.43-5.13c6.22-.65,10.07-1.51,11.47-2.59A4.9,4.9,0,0,1,110.72,203.23ZM52.37,207a2,2,0,0,1,.56.12c1.06.41,1,.51-.37,1.59-2.37,1.82-3.22,1.33-1.58-.91a1.6,1.6,0,0,1,1.39-.8Zm132,2.51c-.17,0-.19.24,0,.64.4,1,.83,1.23.83.37a1.29,1.29,0,0,0-.59-.93.4.4,0,0,0-.21-.08ZM59.69,211c.18.06.17,1.1-.16,3.08-.72,4.38-.52,4.64,4.43,5.78,3.22.75,3.92.74,5.45,0,1-.48,1.76-.67,1.76-.41s-.61.76-1.35,1.13c-1.56.78-5.84.38-8.71-.82-2.41-1-3.13-2.77-2.42-5.94C59.13,211.82,59.5,210.9,59.69,211Zm-21.36,8a3.22,3.22,0,0,1,.82.36,4,4,0,0,1,1.63,1.58c.49,1.28.22,1.16-1.46-.66C38.49,219.34,38.17,219,38.33,219Zm9.19,16,1.74,1.81c2,2.13,2.11,2.15,2.11.67,0-.75-.67-1.37-1.93-1.81Zm22.37,35.11a1.06,1.06,0,0,1,.28.06c1.5.57,1.2,1.87-.55,2.31a11.24,11.24,0,0,0-3.81,2.76c-1.27,1.34-2.82,2.38-3.55,2.38-1.45,0-1.66-.72-.54-1.93a12.09,12.09,0,0,0,1.38-2c.78-1.44,5.19-3.71,6.79-3.58Zm199.65,6a6.81,6.81,0,0,1,1.88.8c3.64,1.86,6.75,6.34,6.75,9.74,0,2.93-1.76,1.93-4.19-2.37a34.4,34.4,0,0,0-3.48-5.18,4.67,4.67,0,0,1-1.33-2.36c0-.44.06-.65.37-.63Zm-53.14.68.7,1.86a3.73,3.73,0,0,0,1.78,2.14c1.57.41,1.34-.34-.7-2.29ZM88.31,285.48c.77,0-.21,1.56-2.71,4.24a30.11,30.11,0,0,0-3.72,4.69c-1.07,2.16-5.38,8-6.32,8.6a1.69,1.69,0,0,0-.79,1.29,1.41,1.41,0,0,1-.9,1.15,1.46,1.46,0,0,0-.9,1.24,3.62,3.62,0,0,1-1.08,2,15.06,15.06,0,0,0-2.24,3.77A62.08,62.08,0,0,1,66.84,318a16,16,0,0,0-1.67,3.45.63.63,0,0,1-.67.57c-.36,0-.51.39-.33.86a1.48,1.48,0,0,1-.48,1.52,5.12,5.12,0,0,0-1.2,2.26A5,5,0,0,1,61.08,329c-1.28,1-2,.77-2.54-.75s3-11.13,4.13-11.51c.38-.12.7-.78.7-1.45,0-1,2.94-5.5,6.33-9.63a4.31,4.31,0,0,0,.87-1.4,2.59,2.59,0,0,1,.75-1.09c.41-.42,2-2.2,3.45-4s3-3.49,3.33-3.85a18.49,18.49,0,0,0,1.72-2.45c1.07-1.76,6.7-6.92,8.06-7.37a1.13,1.13,0,0,1,.43-.08Zm151,9c1.29,0,2.57,1.37,4.69,4.92,1.13,1.89,4.1,6.75,6.61,10.8,5.75,9.31,6.73,11.32,7.74,15.76a25.25,25.25,0,0,0,1.2,4.2c.82,1.26,1.12,7.71.45,9.45-.22.58-.62,1.05-.89,1.05-1.13,0-2.67-2.72-3.17-5.6-.29-1.71-.7-3.77-.9-4.6s-.44-1.9-.52-2.4c-.79-4.51-1.19-6.07-1.64-6.35a2.5,2.5,0,0,1-.52-1.78c0-.81-.27-1.47-.6-1.47a.66.66,0,0,1-.6-.71c0-1-4.61-10.4-5.57-11.39a29.64,29.64,0,0,1-2.5-3.8c-.95-1.65-2.36-3.83-3.13-4.86-1.55-2.05-1.79-3.25-.65-3.22Z" />
                        <g id="small_nodules-loader">
                            <path class="nodules-loader" d="M202.08,49a4.7,4.7,0,0,1,1.39,1.2c.6.66.95,1.2.78,1.2a4.85,4.85,0,0,1-1.38-1.2C202.27,49.57,201.92,49,202.08,49Z" />
                            <path class="nodules-loader" d="M202.2,51.62a2.53,2.53,0,0,1,.86.36,5.13,5.13,0,0,1,1.65,1.32c.29.47,0,.46-.84,0A5.23,5.23,0,0,1,202.23,52c-.15-.24-.16-.35,0-.35Z" />
                            <path class="nodules-loader" d="M194.17,56.83s.27.15.75.53a3.63,3.63,0,0,1,1.05,1c0,.49-.49.17-1.28-.83C194.32,57.11,194.14,56.86,194.17,56.83Z" />
                            <path class="nodules-loader" d="M193.67,59.31a7.88,7.88,0,0,1,3,2.1c.52.65.1.51-1.1-.38a10.84,10.84,0,0,1-2-1.63c0-.06,0-.08.1-.09Z" />
                            <path class="nodules-loader" d="M195,63.43a6.44,6.44,0,0,1,2,1.2c.84.66,1.33,1.2,1.09,1.2a6.56,6.56,0,0,1-2-1.2c-.84-.66-1.33-1.2-1.09-1.2Z" />
                            <path class="nodules-loader" d="M196.08,66.43a4.7,4.7,0,0,1,1.39,1.2c.6.66.95,1.2.78,1.2a4.85,4.85,0,0,1-1.38-1.2c-.6-.66-1-1.2-.79-1.2Z" />
                            <path class="nodules-loader" d="M193.68,67.63a4.7,4.7,0,0,1,1.39,1.2c.6.66,1,1.2.78,1.2a4.85,4.85,0,0,1-1.38-1.2C193.87,68.17,193.52,67.63,193.68,67.63Z" />
                            <path class="nodules-loader" d="M222.67,113.09l2.55,1.92a16.2,16.2,0,0,1,2.55,2.17c0,.55-.57.16-2.79-1.92Z" />
                            <path class="nodules-loader" d="M223.68,116.83a4.7,4.7,0,0,1,1.39,1.2c.6.66,1,1.2.78,1.2a4.85,4.85,0,0,1-1.38-1.2C223.87,117.37,223.52,116.83,223.68,116.83Z" />
                            <path class="nodules-loader" d="M180.37,110.26a1.61,1.61,0,0,1,.56.25,2.24,2.24,0,0,1,.63,1.71c0,1.26,0,1.25-.8-.19q-1-1.84-.39-1.77Z" />
                            <path class="nodules-loader" d="M178.62,117.51a1.73,1.73,0,0,1,.66.11c.48.19.34.34-.36.36s-1-.11-.79-.31a.75.75,0,0,1,.49-.16Z" />
                            <path class="nodules-loader" d="M191,184.08c.71,0,3.76,3,4.5,4.45.34.66-.62,0-2.14-1.46s-2.62-2.79-2.46-3a.15.15,0,0,1,.1,0Z" />
                            <path class="nodules-loader" d="M193.63,184.63a13.1,13.1,0,0,1,2.34,2.1c1.12,1.16,1.9,2.1,1.73,2.1a13.13,13.13,0,0,1-2.33-2.1C194.25,185.58,193.47,184.63,193.63,184.63Z" />
                            <path class="nodules-loader" d="M188,185a9.31,9.31,0,0,1,1.29,1.1,15.85,15.85,0,0,1,2.52,2.85c.94,1.74.31,1.21-2.15-1.8A14.56,14.56,0,0,1,188,185Z" />
                            <path class="nodules-loader" d="M186.51,186.73c.73,0,6.46,6.15,6.46,7,0,.32-1.26-.85-2.8-2.6a41.26,41.26,0,0,0-3.43-3.59c-.35-.22-.48-.57-.28-.77Z" />
                            <path class="nodules-loader" d="M187.05,191.24c.08,0,.4.27,1,.84a3.65,3.65,0,0,1,1.28,2.1c0,.83-.09.84-.62,0-.34-.49-.91-1.44-1.28-2.1s-.49-.89-.41-.89Z" />
                            <path class="nodules-loader" d="M225.67,183.43c.49,0,.9.26.9.58s-.41.43-.9.24-.9-.45-.9-.58S225.17,183.43,225.67,183.43Z" />
                            <path class="nodules-loader" d="M221.65,184.08h0c.64,0,1.77,1.39,2.24,2.95.41,1.37.31,1.33-1.21-.47-.91-1.09-1.49-2.15-1.27-2.37a.38.38,0,0,1,.24-.11" />
                            <path class="nodules-loader" d="M220.2,186h0a2.89,2.89,0,0,1,1,.7,3.54,3.54,0,0,1,1.2,2c0,.74-.22.7-1.2-.19a3.55,3.55,0,0,1-1.2-2c0-.37.05-.55.23-.52" />
                            <path class="nodules-loader" d="M217.54,186.43c.67.09,1.82,2,1.82,3.27,0,1-.24.84-1.23-.79-.67-1.11-1-2.19-.85-2.4a.31.31,0,0,1,.26-.08Z" />
                            <path class="nodules-loader" d="M213.53,187.87h0a2.43,2.43,0,0,1,1.64,2c0,.76-.21.72-1.13-.22-.61-.64-1-1.37-.84-1.64a.35.35,0,0,1,.33-.18" />
                            <path class="nodules-loader" d="M210.71,189.05a3.57,3.57,0,0,1,2.06,2.36c0,.38-.59.1-1.32-.63s-1.16-1.47-1-1.66a.26.26,0,0,1,.23-.07Z" />
                            <path class="nodules-loader" d="M209.39,190.23a.23.23,0,0,1,.14,0,.65.65,0,0,1,.24.09,1.32,1.32,0,0,1,.6,1c0,.33-.27.44-.6.23a1.31,1.31,0,0,1-.6-1c0-.19.08-.3.22-.33Z" />
                            <path class="nodules-loader" d="M207.74,192a.89.89,0,0,1,.23.1,1.31,1.31,0,0,1,.6,1c0,.33-.27.43-.6.23a1.31,1.31,0,0,1-.6-1c0-.25.15-.37.37-.33Z" />
                            <path class="nodules-loader" d="M307.66,84.46h0a2.65,2.65,0,0,1,.57.41c.49.41,1,.63,1.14.5s.29.45.34,1.3c.1,1.59-.17,1.38-1.71-1.35-.32-.56-.46-.84-.39-.87Z" />
                            <path class="nodules-loader" d="M305.89,86.71s.05,0,.1.06c.54.44,1,.58,1,.3,0-1.26,2,2.52,2.19,4.14h0c.11,1,.12,1.71,0,1.57-1.2-1.55-3.59-6-3.28-6.07Z" />
                            <path class="nodules-loader" d="M305.38,88.82c.31-.31,3.39,4.72,3.39,5.53,0,.29-.83-.78-1.83-2.37s-1.71-3-1.56-3.16Z" />
                            <path class="nodules-loader" d="M304.77,90.43c.62,0,3.61,5.76,3.73,7.19a11.6,11.6,0,0,0,.57,2.71c.25.66-.41-.11-1.46-1.72s-1.78-3-1.62-3.2.6.31,1,1,.84,1.16,1,1-.54-1.82-1.59-3.65a13,13,0,0,1-1.62-3.34Z" />
                            <path class="nodules-loader" d="M302.49,96c.6.23,3.23,4.32,3.64,5.73.24.8.14.78-.48-.12-2.48-3.57-3.51-5.35-3.25-5.6a.07.07,0,0,1,.09,0Z" />
                            <path class="nodules-loader" d="M304.9,96.67s.05,0,.09.06a26.74,26.74,0,0,1,2.3,3.6c.92,1.65,1.4,2.73,1.06,2.4a25.75,25.75,0,0,1-2.3-3.6,7.88,7.88,0,0,1-1.15-2.46Z" />
                            <path class="nodules-loader" d="M301,100.65c.08,0,.34.26.78.9,1.76,2.55,4.68,8.35,3.45,6.88-1.48-1.77-1.63-1.24-.36,1.23,1.48,2.86.55,2-1.55-1.38-1.06-1.73-2.33-3.75-2.82-4.5s-.72-1.35-.52-1.35a9.31,9.31,0,0,1,2,2.41c2.12,3.22,2.58,2.56.59-.84-1.13-1.93-1.73-3.33-1.53-3.35Z" />
                            <path class="nodules-loader" d="M301.51,107.83c.57,0,4.26,5.46,4.26,6.3,0,.28-.09.39-.19.25C303,110.86,301.09,107.83,301.51,107.83Z" />
                            <path class="nodules-loader" d="M304.9,118.68a6.63,6.63,0,0,1-.57-2.4c-.11-1.58-3.63-7.75-4.32-7.66h0l-.06,0c-.15.15.38,1.31,1.17,2.58,2.16,3.48,2.34,3.8,2.06,3.8a12.56,12.56,0,0,1-1.88-2.45c-.89-1.35-1.77-2.3-2-2.12s0,.74.39,1.23.59,1.14.39,1.45.35,1.81,1.2,3.33c1.73,3.08,2.62,3.81,1.12.91-.53-1-.82-2-.66-2.16s.72.52,1.24,1.52a7.35,7.35,0,0,0,1.64,2.25C305.11,119.26,305.19,119.15,304.9,118.68Zm-3.93-4a1.31,1.31,0,0,1-.6-1,.3.3,0,0,1,.22-.33h.15a.61.61,0,0,1,.23.09,1.32,1.32,0,0,1,.6,1C301.57,114.83,301.3,114.94,301,114.73Z" />
                            <path class="nodules-loader" d="M297,113.43c.8.14,6.37,9.74,6.34,11,0,.26-1.5-2.06-3.33-5.15s-3.21-5.73-3.08-5.86a.08.08,0,0,1,.07,0Z" />
                            <path class="nodules-loader" d="M295.85,115.82c.53.21,2.91,3.86,4.45,6.88a7.68,7.68,0,0,1,1,2.53c-.4,0-5.81-9.15-5.56-9.4a.08.08,0,0,1,.08,0Z" />
                            <path class="nodules-loader" d="M295,118.79c.37,0,3.35,4.43,4.8,7.19a6.24,6.24,0,0,1,.93,2.25c-.37,0-5.77-8.78-5.77-9.38,0,0,0-.06,0-.06Z" />
                            <path class="nodules-loader" d="M294,120.62c.67.26,6.35,9.45,6.34,10.29,0,.34-.58-.27-1.28-1.35-1.87-2.93-2.1-1.83-.28,1.42a15.25,15.25,0,0,1,1.57,3.43c0,.84,0,.87-3.47-5.13-1.69-2.88-2.87-5.25-2.63-5.25s.93.83,1.53,1.84,1.23,1.7,1.4,1.53-.55-1.7-1.6-3.4-1.78-3.22-1.62-3.38c0,0,0,0,0,0Z" />
                            <path class="nodules-loader" d="M291.49,127.31c.29-.29,5.79,8,7.32,11,.54,1.08.88,1.95.74,1.95C299.11,140.23,291.22,127.58,291.49,127.31Z" />
                            <path class="nodules-loader" d="M294.13,127.82s.07,0,.12,0c.93.58,5.52,8.47,5.51,9.48,0,.43-.78-.6-1.72-2.31s-2.34-4.11-3.11-5.35S293.94,127.83,294.13,127.82Z" />
                            <path class="nodules-loader" d="M292.29,132a.47.47,0,0,1,.2.08c.57.35,6.22,10.15,6.86,11.89.86,2.37-.3.73-3.52-5-1.88-3.31-3.53-5.91-3.67-5.77s.91,2.38,2.33,5c3.2,5.82,4.27,8.2,3.48,7.72s-.72.32.3,2.09a8.12,8.12,0,0,1,.88,1.95c.05,1.16-.7,0-3.56-5.32-3.41-6.38-3.82-8.23-.59-2.66,3.4,5.87,2.75,3.56-.94-3.32-1.9-3.53-3.14-6.23-2.77-6s.68.12.68-.25.13-.43.32-.42Z" />
                            <polygon class="nodules-loader" points="291.1 142.11 291.11 142.11 291.11 142.11 291.1 142.11" />
                            <path class="nodules-loader" d="M289.72,145.56h0s.07,0,.14.07c1.35,1.12,6.31,9.63,6.29,10.79,0,.66-.21.57-.69-.29-.37-.66-2-3.48-3.65-6.27-1.43-2.44-2.28-4.21-2.09-4.3" />
                            <path class="nodules-loader" d="M298,153.42c-1-2.88-6.19-11.11-6.94-11.31-.1,0-.12.11,0,.45.31,1.08.23,1.31-.36.95-.42-.27.28,1.39,1.57,3.67s2.85,5.17,3.47,6.4c1,2.07,1.61,2.75,1.61,1.94a19.09,19.09,0,0,0-.88-2.55c-.49-1.24-.55-1.75-.15-1.13s1.07,1.55,1.48,2.1C298.46,154.78,298.49,154.71,298,153.42Zm-5.13-7.19c-.16,0-.59-.54-.94-1.2s-.51-1.2-.34-1.2.58.54.94,1.2S293.08,146.23,292.91,146.23Zm1.8,3c-.16,0-.59-.54-.94-1.2s-.51-1.2-.34-1.2.58.54.94,1.2S294.88,149.23,294.71,149.23Z" />
                            <path class="nodules-loader" d="M288.82,148.78c-1.56-2.44-2.68-3.93-2.8-3.81s.11.44.52,1.22a2.92,2.92,0,0,1,.29,2c-.18.47,1.19,3.53,3.05,6.79s3.19,5.25,3,4.42a27.43,27.43,0,0,0-1.56-3.75c-1.72-3.41-.85-2.69,1.31,1.09,1.05,1.83,2,3.2,2.21,3C295.14,159.46,292.35,154.33,288.82,148.78Zm-1.13.61c-.41-.4-.59-.89-.41-1.07a.18.18,0,0,1,.17,0h0c.18,0,.41.34.58.79C288.36,149.91,288.29,150,287.69,149.39Z" />
                            <polygon class="nodules-loader" points="286.02 144.97 286.02 144.97 286.02 144.97 286.02 144.97" />
                            <path class="nodules-loader" d="M285,150.64h0c.84.35,7.53,12.55,7.55,13.84,0,.82-.11.62-4.16-6.75-2-3.74-3.6-6.92-3.45-7.08a0,0,0,0,1,.06,0" />
                            <path class="nodules-loader" d="M285,154.83h0c.28-.29,5.71,9.24,6.54,11.49.45,1.21.45,1.21-.48,0-1.49-1.92-6.37-11.19-6.06-11.5" />
                            <path class="nodules-loader" d="M283.85,156.45c.11,0,.36.22.77.72a74.36,74.36,0,0,1,4.89,9.61c1.17,3.07.18,1.68-2.92-4.12C284.49,158.74,283.51,156.48,283.85,156.45Z" />
                            <path class="nodules-loader" d="M280.65,157.76a3.18,3.18,0,0,1,.68.77c1.23,1.68,6.44,11.39,6.44,12,0,.78-.29.36-3.49-5.2-2.48-4.29-4.1-7.78-3.63-7.57Z" />
                            <path class="nodules-loader" d="M280.38,160.83h0a.06.06,0,0,1,.05,0c.7.43,6.14,10.14,6.14,11s-1.29-1.31-4.2-6.62c-1.33-2.45-2.19-4.32-2-4.36" />
                            <path class="nodules-loader" d="M278.59,162.7h0l.06,0c.89.8,6.12,10,6.12,10.76s-1.3-1.14-4.21-6.57c-1.33-2.47-2.17-4.29-2-4.23" />
                            <path class="nodules-loader" d="M274.91,165.6a.21.21,0,0,1,.11,0c.66.41,5.55,8.87,5.55,9.62,0,1-.67.1-2.12-2.78-.87-1.73-2.15-4.07-2.84-5.2s-.89-1.68-.7-1.68Z" />
                            <path class="nodules-loader" d="M267,167.23c.32,0,2.07,2.7,4.47,6.9l1.37,2.4L271.47,175c-.77-.86-1.75-2.08-2.18-2.7-.9-1.32-.65-.32.73,2.91,1.51,3.53.46,2.63-1.23-1-.82-1.81-1.34-3.56-1.14-3.89a2.25,2.25,0,0,0-.27-1.81c-.36-.66-.51-1.21-.34-1.21Z" />
                            <path class="nodules-loader" d="M273.57,167.42c.28-.27,5.2,8.46,5.2,9.22s-1.33-1.38-3.53-5.44A13.86,13.86,0,0,1,273.57,167.42Z" />
                            <path class="nodules-loader" d="M270.54,168.06c.29-.29,4.63,7.74,4.62,8.56,0,.28-1.11-1.47-2.45-3.89S270.39,168.21,270.54,168.06Z" />
                            <path class="nodules-loader" d="M264.63,170.37a.55.55,0,0,1,.24.1c.57.36,3.7,6.46,3.7,7.22,0,.92-.62.08-1.84-2.51-.74-1.57-1.6-3.35-1.92-4s-.34-.84-.18-.84Z" />
                            <path class="nodules-loader" d="M260,176.44h0c.09,0,.15.21.17.64,0,.63-.12,1-.32.79a1.19,1.19,0,0,1,0-1.15c.07-.18.14-.27.19-.28" />
                            <path class="nodules-loader" d="M296.13,170.81c.14,0,.37.18.66.64s.56.64.57.13a.71.71,0,0,1,.61-.75c.33,0,.6.56.6,1.24s-.25,1.08-.56.89a.79.79,0,0,0-1,.41c-.32.51-.59.28-.85-.75s-.26-1.77,0-1.81Z" />
                            <path class="nodules-loader" d="M294.75,173.44c.09,0,.15.2.17.64,0,.63-.12,1-.31.79a1.21,1.21,0,0,1-.05-1.15c.07-.18.13-.27.19-.28Z" />
                            <path class="nodules-loader" d="M297.6,191.61c.5.15,3.07,5.8,3.6,8,.2.83-.6-.49-1.76-2.93s-2-4.71-1.91-5c0,0,0-.06.07,0Z" />
                            <path class="nodules-loader" d="M297.11,196c.52,0,3.26,6.53,3.22,7.67s0,1.21-2.29-4.52C297.35,197.45,296.93,196,297.11,196Z" />
                            <path class="nodules-loader" d="M294.7,202h0c.43,0,3.87,7.73,3.84,8.61,0,.38-.4,0-.87-.88-1.25-2.3-3.34-7.73-3-7.73" />
                            <path class="nodules-loader" d="M290.5,214.14c.19,0,.52.47.78,1.16s1,2.48,1.52,3.75a14.06,14.06,0,0,1,1,3c0,1.29-1.07-.54-2.35-4-.71-1.94-1.16-3.66-1-3.83a.11.11,0,0,1,.07,0Z" />
                            <path class="nodules-loader" d="M289.9,219c.53.12,2.09,3.74,2,4.8,0,.43-.59-.4-1.25-1.83s-1-2.76-.86-2.94A.09.09,0,0,1,289.9,219Z" />
                            <path class="nodules-loader" d="M288.92,221.53l.9,1.5a6.26,6.26,0,0,1,.91,2.4c0,.8-.05.8-.51,0a11.79,11.79,0,0,1-.9-2.4Z" />
                            <path class="nodules-loader" d="M287.44,222.69c.45-.17,2.14,3.81,2.09,5.06,0,.54-.58-.21-1.22-1.67a8.38,8.38,0,0,1-.95-3.3.15.15,0,0,1,.08-.09Z" />
                            <path class="nodules-loader" d="M283.09,232.06c.08,0,.21.18.43.57a13.16,13.16,0,0,1,.93,2.85c.24,1.13.17,2-.16,2-.56,0-1.34-2.81-1.3-4.72,0-.42,0-.64.1-.65Z" />
                            <path class="nodules-loader" d="M275,240.54c.62.26,2.62,5.31,2.59,6.69,0,.72-.7-.43-1.51-2.54s-1.34-4-1.18-4.14a.09.09,0,0,1,.1,0Z" />
                            <path class="nodules-loader" d="M272.79,241c.55,0,2.08,3.78,2.67,6.6.68,3.29-.57,1.44-1.93-2.85C272.88,242.72,272.54,241,272.79,241Z" />
                            <path class="nodules-loader" d="M271.49,244c.56,0,3.08,6.72,3.08,8.22,0,.43-.23.78-.51.78s-.85-1.55-1.27-3.45a27.66,27.66,0,0,0-1.31-4.5c-.34-.65-.34-1.05,0-1.05Z" />
                            <path class="nodules-loader" d="M269.21,247.12c.07-.05.28.24.7.81a14.91,14.91,0,0,1,2.22,6.24c-.05,1.1-2.2-3.51-2.73-5.86-.18-.76-.25-1.14-.19-1.19Z" />
                            <path class="nodules-loader" d="M265.1,251.63c.5-.07,2.85,5.29,2.86,6.75,0,.8-.1,1.34-.24,1.2a34.5,34.5,0,0,1-2.7-7.75c0-.13,0-.2.08-.2Z" />
                            <path class="nodules-loader" d="M269.31,251.63c.36-.19,1.6,2.78,1.61,4.1,0,.82-.27.57-.88-.82a9.25,9.25,0,0,1-.82-3c0-.17,0-.26.09-.28Z" />
                            <path class="nodules-loader" d="M262.1,251.75c.46-.12,2.66,4.91,3.09,7.28l.39,2.1-1-2.1c-2-4.23-2.63-6.06-2.58-7.07,0-.13,0-.2.08-.21Z" />
                            <path class="nodules-loader" d="M269.12,256.6c0,1.39-.12,1.34-.85-.57s-1-2.88-.68-2.83h0c.13,0,.36.25.7.7a4.94,4.94,0,0,1,.83,2.7h0" />
                            <path class="nodules-loader" d="M260.57,254.91c.59.24,2.57,4.94,2.57,6.22,0,.66-.66-.41-1.47-2.37s-1.34-3.69-1.19-3.84a.07.07,0,0,1,.09,0Z" />
                            <path class="nodules-loader" d="M250.75,258.65c.35-.35,2.82,6,2.82,7.3,0,.49-.11.88-.25.88-.43,0-2.9-7.86-2.57-8.18Z" />
                            <path class="nodules-loader" d="M259.64,259c.32.11.55,1,.79,3.07l.32,2.68-.88-2.66a7.11,7.11,0,0,1-.6-2.95c.14-.13.26-.18.37-.14Z" />
                            <path class="nodules-loader" d="M249.19,259.08c.68,0,2.05,4.22,2.31,7.29l.31,3.76-1.48-5.39a33.13,33.13,0,0,1-1.26-5.61.13.13,0,0,1,.12-.05Z" />
                            <path class="nodules-loader" d="M257.76,261.37c.13,0,.34.22.63.68a5.9,5.9,0,0,1,.52,2.68c0,1.71-.07,1.68-.79-.6-.54-1.75-.65-2.77-.36-2.76Z" />
                            <path class="nodules-loader" d="M255.36,261.73l.88,1.8a9.16,9.16,0,0,1,.9,2.67c.05,1.68-1.15-.27-1.47-2.39Z" />
                            <path class="nodules-loader" d="M241.38,270.35c.25.13.71,1.5,1,3.68.25,1.68.2,2.47-.15,2.1a10.08,10.08,0,0,1-1-3.6c-.21-1.62-.14-2.28.06-2.18Z" />
                            <path class="nodules-loader" d="M222.17,270.49c.46.12,1.8,3.52,2.29,5.94.67,3.23-.59,1.46-1.7-2.38a11.08,11.08,0,0,1-.67-3.54.08.08,0,0,1,.08,0Z" />
                            <path class="nodules-loader" d="M225.15,270.51c.52.08,1.83,3.62,2.2,6.09h0c.21,1.34.12,2.12-.22,1.91a1.87,1.87,0,0,1-.56-1.44,16,16,0,0,0-.91-3.66,6.6,6.6,0,0,1-.61-2.86.13.13,0,0,1,.1,0Z" />
                            <path class="nodules-loader" d="M221.1,271.63c.67,0,1.91,4.84,1.44,5.62-.27.43-1.53-3.11-1.95-5.47,0-.08.22-.15.51-.15Z" />
                            <path class="nodules-loader" d="M201.44,272.24a0,0,0,0,1,.06,0,6.08,6.08,0,0,1,1,1.78c.67,1.42.66,1.44-.22.34a4.25,4.25,0,0,1-.93-1.75c0-.22,0-.34.07-.38Z" />
                            <path class="nodules-loader" d="M230,272.47a.33.33,0,0,1,.11.08,7.86,7.86,0,0,1,.95,3c.24,1.57.18,2.09-.18,1.5-.74-1.22-1.38-4.72-.88-4.56Z" />
                            <path class="nodules-loader" d="M228.53,273.18c.27,0,.94,1.43,1,2.35,0,.33-.23.2-.55-.3a3.66,3.66,0,0,1-.55-1.8c0-.18.05-.25.11-.25Z" />
                            <path class="nodules-loader" d="M200.37,274c.39,0,2.8,3.9,2.8,4.52s-.09.49-1.75-2.27C200.68,275.05,200.21,274,200.37,274Z" />
                            <path class="nodules-loader" d="M207.94,274.63c.56,0,3,3.69,3,4.52,0,.64-.26.35-2.05-2.28C208.09,275.64,207.64,274.63,207.94,274.63Z" />
                            <path class="nodules-loader" d="M210.05,274.84h0c.64.2,3.32,4.31,3.32,5.19,0,.46-.83-.46-1.83-2s-1.73-3-1.59-3.13a.09.09,0,0,1,.1,0Z" />
                            <path class="nodules-loader" d="M198.65,274.84c.68.19,3.32,4.57,3.31,5.63,0,.58-.83-.38-1.84-2.14s-1.72-3.32-1.58-3.46a.1.1,0,0,1,.11,0Z" />
                            <path class="nodules-loader" d="M191.86,278.27h0a4.12,4.12,0,0,1,.66.49,2.67,2.67,0,0,1,1,1.35c0,.91-.54.57-1.28-.83-.36-.67-.51-1-.43-1Z" />
                            <path class="nodules-loader" d="M188.16,278.84s.27.14.76.52a2.6,2.6,0,0,1,1.05,1.45c0,.34-.08.51-.17.37l-1.05-1.45a3.67,3.67,0,0,1-.59-.89Z" />
                            <path class="nodules-loader" d="M186.17,279.66a.4.4,0,0,1,.21.08,1.29,1.29,0,0,1,.59.93c0,.86-.43.67-.83-.37-.15-.4-.14-.63,0-.64Z" />
                            <path class="nodules-loader" d="M203.13,280a.62.62,0,0,1,.64.6c0,.33-.12.6-.27.6s-.43-.27-.63-.6-.09-.6.26-.6Z" />
                            <path class="nodules-loader" d="M198.49,203.83A3.34,3.34,0,0,1,200.4,205c1,1.07.95,1.27-.3,3.67s-2,8.8-2.3,19.35c0,.58-.2,1.05-.4,1.05-.59,0,.36-15.67,1.09-18a17.19,17.19,0,0,1,1.49-3.38c.76-1.17.69-1.41-.77-2.55-1-.8-1.27-1.27-.72-1.27Z" />
                            <path class="nodules-loader" d="M190.31,213.31c.08,0,.13.4.14,1h0c0,1-.11,1.47-.28,1.06a3.5,3.5,0,0,1,0-1.8c.06-.22.11-.31.16-.28Z" />
                            <path class="nodules-loader" d="M190.31,217.51c.08,0,.13.4.14,1h0c0,1-.11,1.47-.28,1.06a3.5,3.5,0,0,1,0-1.8c.06-.22.11-.31.16-.28Z" />
                            <path class="nodules-loader" d="M182.17,202s.27.15.75.53a3.78,3.78,0,0,1,1.05,1c0,.5-.5.18-1.28-.82C182.32,202.31,182.14,202.06,182.17,202Z" />
                            <path class="nodules-loader" d="M177.84,208.23a4,4,0,0,1,.43,0c1.46.21,5,4,4.93,5.25-.07.91-.7.52-3-1.85C177.5,208.82,177,208.2,177.84,208.23Z" />
                            <path class="nodules-loader" d="M187.12,261.05c.19,0,.64.34,1.37,1.16a6,6,0,0,1,1.46,2.4c0,.4-.69-.09-1.5-1.08C187.25,262.06,186.81,261.06,187.12,261.05Z" />
                            <path class="nodules-loader" d="M193.19,264.05c.24,0,.65.41,1,1.08.69,1.34.67,1.36-.37.37-.59-.57-.92-1.21-.72-1.41a.18.18,0,0,1,.09,0Z" />
                            <path class="nodules-loader" d="M197.39,264.63h.14a1,1,0,0,1,.24.1,1.32,1.32,0,0,1,.6,1c0,.33-.27.43-.6.23a1.31,1.31,0,0,1-.6-1c0-.19.08-.3.22-.33Z" />
                            <path class="nodules-loader" d="M56,239.54c.2,0,.48.47,1,1.49s1,1.76,1,1.35c0-1.76,1.86-.53,3,2,.67,1.52,1.23,2.84,1.23,2.92,0,.68-4.28-2-4.54-2.83-.19-.6-.59-.94-.89-.75-.66.41-1.38-2.21-1-3.72.08-.32.17-.49.28-.49Z" />
                            <path class="nodules-loader" d="M62.34,243c.07,0,.19.33.43,1.06a13.07,13.07,0,0,1,.53,2.7c0,1,0,1-.53.3a5.75,5.75,0,0,1-.53-2.7,4.85,4.85,0,0,1,.1-1.36Z" />
                            <path class="nodules-loader" d="M64.22,243.65a7.51,7.51,0,0,1,1.15,2.46c.51,1.52.7,2.61.41,2.43-.66-.41-2-4.49-1.64-4.88a.08.08,0,0,1,.08,0Z" />
                            <path class="nodules-loader" d="M67,244.79a.23.23,0,0,1,.14,0,5.2,5.2,0,0,1,1.37,2.41c.75,2.19.57,2.63-.74,1.76-.8-.53-1.37-4-.77-4.18Z" />
                            <path class="nodules-loader" d="M71.87,246.38c.2,0,.68.94,1.39,2.63.51,1.22.77,2.22.59,2.22-.35,0-2.08-3.82-2.08-4.58,0-.19,0-.28.1-.27Z" />
                            <path class="nodules-loader" d="M70.56,246.43c.33,0,.61.86.61,1.9,0,2.19-.26,2.11-.83-.25-.23-1-.15-1.65.22-1.65Z" />
                            <path class="nodules-loader" d="M74.34,247.76c.12,0,.34.38.73,1.07a6.54,6.54,0,0,1,.86,2.4c0,.68-.22.61-.88-.26a4.56,4.56,0,0,1-.86-2.4c0-.57,0-.85.15-.81Z" />
                            <path class="nodules-loader" d="M76.59,248.46c.39,0,1.07,1.42,1.14,2.62s-.56.87-1.11-.6a2.92,2.92,0,0,1-.18-1.91.19.19,0,0,1,.15-.11Z" />
                            <path class="nodules-loader" d="M79.23,248.58c.4-.08,2.14,3.19,2.14,4.13s-.65.16-1.52-1.52a4.55,4.55,0,0,1-.68-2.55s0-.06.06-.06Z" />
                            <path class="nodules-loader" d="M81.58,249c.06,0,.13.05.23.15a6.37,6.37,0,0,1,1,2.4q.42,1.8-.18,1.2a6.37,6.37,0,0,1-1-2.4c-.21-.9-.23-1.35,0-1.35Z" />
                            <path class="nodules-loader" d="M83.88,250.63c.08,0,.23.2.49.6A4,4,0,0,1,85,253c0,.8-.07.8-.58,0a3.93,3.93,0,0,1-.58-1.8c0-.4,0-.6.09-.6Z" />
                            <path class="nodules-loader" d="M88.81,251.36c.32.06.88,1,1.22,2.27.38,1.44.36,1.46-.53.34a4.27,4.27,0,0,1-.93-2.07c0-.4.09-.56.24-.54Z" />
                            <path class="nodules-loader" d="M85.81,251.44c.26,0,.77.64,1.23,1.54s.73,1.85.45,1.85c-.69,0-2.22-2.9-1.77-3.35a.12.12,0,0,1,.09,0Z" />
                            <path class="nodules-loader" d="M91.23,252.24c.19,0,.5.38.8,1,.45,1,.49,1.57.11,1.57-.73,0-1.37-1.49-1.06-2.45C91.12,252.29,91.17,252.24,91.23,252.24Z" />
                            <path class="nodules-loader" d="M93.9,253c.29,0,.69.47.9,1.05s.54,1.46.76,1.95,0,.55-.9-.24C93.36,254.64,92.92,253,93.9,253Z" />
                            <path class="nodules-loader" d="M96.58,253.15c.13,0,.35.28.71.75a4.25,4.25,0,0,1,.86,2.09c0,.75-.2.71-.9-.22a4.19,4.19,0,0,1-.86-2.1c0-.38,0-.55.19-.52Z" />
                            <path class="nodules-loader" d="M98.36,253.2c.13,0,.37.23.73.7A4.25,4.25,0,0,1,100,256c0,.6-.33.4-.88-.56C98.3,254.08,98.06,253.16,98.36,253.2Z" />
                            <path class="nodules-loader" d="M100.87,254.37c.19,0,.55.41.87,1s.42,1.25.11,1.25c-.61,0-1.46-1.82-1-2.24l.07,0Z" />
                            <path class="nodules-loader" d="M155.28,2.11A8,8,0,0,0,151.51.73c-.66-.09-1.16-.15-1.55-.17h0c-1.19-.05-1.4.29-1.85,1.48-2.09,5.56-2.73,8-2.21,8.55.82.81,8.65,1.76,9,1.1a.73.73,0,0,0,.06-.82,13.57,13.57,0,0,1,.5-4C156.22,3.51,156.2,3,155.28,2.11Zm-1.63,3.77a15.79,15.79,0,0,0-.88,4c0,1.34-.09,1.38-.94.53a3.9,3.9,0,0,0-2.41-1c-1.78,0-1.9-1.36-.42-4.77.67-1.55,1-2.09,1.72-2.15h0a3.36,3.36,0,0,1,.83.09C154.63,3.27,154.59,3.21,153.65,5.88Z" />
                            <path class="nodules-loader" d="M119.5,14.49a7.39,7.39,0,0,1,3.1.45c1.48,1.23.74,1.79-2.08,1.59l-2.85-.2.19,3.59a30.06,30.06,0,0,0,.3,3.67c.06,0,1.53.26,3.26.48l3.15.4V20.59c0-2.14.24-4,.54-4.22s.54,1.75.54,4.46v4.8l-2.19,0a48.63,48.63,0,0,1-4.88-.45l-2.69-.41.19-4.8a31.4,31.4,0,0,1,.43-5,6.57,6.57,0,0,1,3-.41Z" />
                            <path class="nodules-loader" d="M101.93,36.64c2,.07,3.76.66,4.33,1.58s.6,6.86,0,7.78c-.86,1.39-1.55-.66-1.42-4.17l.13-3.3h-3.82c-4.68,0-5.61-1.19-1.38-1.77a13,13,0,0,1,2.13-.12Z" />
                            <path class="nodules-loader" d="M98.17,39.43c.33,0,.6,1,.6,2.1s-.27,2.1-.6,2.1-.6-.94-.6-2.1S97.84,39.43,98.17,39.43Z" />
                            <path class="nodules-loader" d="M85.65,43.79c1.25.06,2.33.63,2.41,1.5a14.17,14.17,0,0,1-.48,4.94c-.55,1.41-1-.29-.7-2.71.25-2.13-.29-2.69-2.56-2.69-.94,0-1.15.44-1.15,2.4,0,1.32-.27,2.4-.6,2.4s-.6-1-.6-2.3c0-1.81.3-2.46,1.45-3.07a4.24,4.24,0,0,1,2.23-.47Z" />
                            <path class="nodules-loader" d="M103.65,45.35c1.16,0,1.13.25.51,1a2.51,2.51,0,0,1-2.32.65c-.87-.14-1.83-.28-2.14-.31-1.29-.11.67-1.15,2.37-1.26.67,0,1.19-.07,1.58-.07Z" />
                            <path class="nodules-loader" d="M84.42,49.11a1.73,1.73,0,0,1,.66.11c.48.19.34.34-.36.37s-1-.12-.79-.32a.7.7,0,0,1,.49-.16Z" />
                            <path class="nodules-loader" d="M109.29,58.67a16.28,16.28,0,0,1,4.21.63l2.67.68v3.15a32.07,32.07,0,0,1-.38,5c-.67,3.38-1.51,2-1.37-2.33a16.85,16.85,0,0,0-.2-4.55,15.41,15.41,0,0,0-3.7-.79L107.17,60V63.8c0,3.78-.79,5.49-1.5,3.25-.54-1.72.29-6.52,1.31-7.55A3.29,3.29,0,0,1,109.29,58.67Z" />
                            <path class="nodules-loader" d="M163.63,65.23c1.28,0,1.46.64.48,1.62s-.07,3,1.74,3.69l1.62.6-1.54,0a3.54,3.54,0,0,1-3.74-2.87c-.46-1.92.08-3.09,1.44-3.09Z" />
                            <path class="nodules-loader" d="M95,68.23l.41,4.52a40.47,40.47,0,0,0,.72,5.31c.21.56-.21.76-1.38.68-.93-.07-2.42-.16-3.33-.21-2.64-.15-1.91-1.3.82-1.3,2.46,0,2.48,0,2.1-1.87a24.79,24.79,0,0,1-.37-3.9v-2h-3c-1.87,0-2.89-.23-2.66-.6s1.8-.6,3.55-.6Z" />
                            <path class="nodules-loader" d="M108.09,68.9a11.67,11.67,0,0,1,1.4.19,24.4,24.4,0,0,0,3.15.34c.62,0,1.13.27,1.13.6,0,1-3.85.7-5.14-.34-.69-.56-.93-.78-.54-.79Z" />
                            <path class="nodules-loader" d="M87.7,71.57c.07,0,.16.1.27.26A7.8,7.8,0,0,1,88.56,75c0,1.37-.23,2.13-.59,1.91s-.6-1.64-.59-3.18S87.48,71.54,87.7,71.57Z" />
                            <path class="nodules-loader" d="M119.81,74.83c.94,0,1.15.27.88,1.13a1.07,1.07,0,0,0,.56,1.48c.67.26.92,0,.92-1.16,0-.86.26-1.36.6-1.15.67.42.81,2.89.2,3.5-.83.83-3.18.36-3.78-.76-1-1.84-.74-3,.62-3Z" />
                            <path class="nodules-loader" d="M155.73,78.43c1.73,0,1.55,1-.26,1.45-2.84.71-1.59,4.47,1.94,5.81a3.09,3.09,0,0,0,2,.21c.9-.55.62-3.39-.45-4.57-.9-1-.91-1.1,0-1.1,2.1,0,3,4.2,1.23,6.11h0c-1.21,1.33-2.14,1.37-4.43.18a7.37,7.37,0,0,1-3.58-5.64c0-1.33,1.63-2.45,3.56-2.45Z" />
                            <path class="nodules-loader" d="M98.83,86.28c.34,0,.72.36,1.1,1,.49.84.72.89,1.14.25s.59-.64.87.08a1.6,1.6,0,0,1-.34,1.55,2.37,2.37,0,0,1-1.41.67c-1.17,0-2.6-1.75-2.23-2.71.22-.59.53-.87.87-.84Z" />
                            <polygon class="nodules-loader" points="116.52 82.36 116.52 82.36 116.52 82.36 116.52 82.36" />
                            <path class="nodules-loader" d="M125.63,86.77c-1.15-1.44-7.53-4.41-9.11-4.41-.22,0-.35.06-.35.19a5.44,5.44,0,0,0,1.58,1.84c1.9,1.65,1.16,2.42-2.33,2.43-1.24,0-2.25.16-2.25.35s.25,1.46.56,2.85.73,3.28.93,4.22c.34,1.63.48,1.7,2.89,1.34,1.38-.2,3.19-.43,4-.51,2.26-.21,2.49-1.17,1.19-5-.66-1.9-1.05-3.61-.87-3.79.66-.66,4.34,4.24,5.2,6.93.49,1.53,1,2.53,1.24,2.21C129.11,94.19,127.56,89.2,125.63,86.77ZM122,92.58c.3.78.17,1-.47.72a4.62,4.62,0,0,0-2.65.45c-2.47,1.09-2.61,1.07-3-.54-.78-3.12-.11-4.65,2.44-5.53,1.32-.46,2.43-.83,2.47-.84a20.58,20.58,0,0,1,.45,2.34A23.57,23.57,0,0,0,122,92.58Z" />
                            <path class="nodules-loader" d="M135.67,90.3l-1.95,1.9a9.3,9.3,0,0,0-1.95,2.31c0,1,2.84,3.71,4.26,4,3.31.78,4.59-3.5,1.94-6.43-.54-.6-.72-1.09-.39-1.09,1,0,2.56,2.1,2.95,4,.3,1.52.07,2.18-1.23,3.47-1.14,1.14-2,1.5-2.92,1.25a11.67,11.67,0,0,0-2-.36c-1.45,0-4.44-3.62-4.44-5.34,0-2.07.93-2.94,3.66-3.43Z" />
                            <path class="nodules-loader" d="M150.3,98.83c3,0,6,2.49,5.28,4.39-.16.42-.47.23-.75-.49-1.76-4.36-8.16-3.07-7.17,1.46.56,2.54,1.15,2.72,4.16,1.26,2.63-1.27,5.32-1.29,6.57,0,.68.68.74.67-3.22.82-2.36.09-2.71.28-2.77,1.47a2.16,2.16,0,0,0,.45,1.68,1.55,1.55,0,0,1,.52,1.19c0,.47-.29.86-.64.86a3.35,3.35,0,0,1-2.36-2.35.6.6,0,0,0-.52-.65c-1.24,0-3.68-3.25-3.68-4.91,0-2,2.35-4.69,4.13-4.69Z" />
                            <path class="nodules-loader" d="M162,100.4l1,0c3,.1,5.3,1,5.3,2.09,0,.36-.47.51-1.05.33l-3-.93c-2.65-.82-3.42.07-4.36,5-.83,4.4-.38,5.38,2.22,4.77,1.39-.33,2.31.49,1.69,1.49-.75,1.22-3.73.65-4.75-.91-.86-1.3-.9-2-.32-5.25,1.07-6,1.15-6.67,3.24-6.67Z" />
                            <path class="nodules-loader" d="M136.61,136.13a3.18,3.18,0,0,1,3,2.69c0,.78-.13.78-.94,0a3.93,3.93,0,0,0-1.5-1l-1.16-.15c-1.17-.15-.88-1.28.37-1.46l.27,0Z" />
                            <path class="nodules-loader" d="M133,146.83a16.2,16.2,0,0,1-1.7-4.65c-.72-3.39-2.15-7.17-2.71-7.26h0a.13.13,0,0,0-.1,0c-.17.17-.05,1,.25,1.78a18.94,18.94,0,0,1,.74,6.31c0,.45-1.15.71-3,.69-5.32,0-7.66,2.83-6.42,7.89.56,2.31.9,2.73,2.31,2.89,2.62.3,6.84-2.13,8-4.63l1-2.16.89,2.1c1.17,2.77,1.09,9.85-.14,12.73-1.05,2.45-1.23,4.07-.45,4.07.27,0,.81-.6,1.19-1.35C136,159.17,136.06,151.34,133,146.83Zm-3.63,1c-1,2.72-2.95,4.36-5.09,4.36-1.21,0-2.07-.35-2.3-.95-1.21-3.16,1.16-5.94,4.36-6a6.24,6.24,0,0,1,2.31.41C129.79,146.14,129.88,146.39,129.32,147.87Z" />
                            <path class="nodules-loader" d="M148.1,147.47c.39,0,.36.26,0,.86-.75,1.35-.25,3.73.86,4.16,1.42.55,2.12-.26,1.85-2.13-.14-1,0-1.73.24-1.73,1.12,0,.73,3.52-.55,5s-1.64,1.34-3.14-.57-1.46-5.16.2-5.48a3.05,3.05,0,0,1,.52-.06Z" />
                            <path class="nodules-loader" d="M145.26,155.92a3.39,3.39,0,0,1,2.6,2c.55,1.19.52,1.49-.14,1.49a1.41,1.41,0,0,1-1.17-.9,1.75,1.75,0,0,0-1.56-.9c-1.29,0-1.64-.87-.62-1.5a1.51,1.51,0,0,1,.89-.21Z" />
                            <path class="nodules-loader" d="M139.2,157.31c.76.07,2.17,1.38,2.17,2.16,0,.31-.4.56-.88.56-1.08,0-2.36-2.18-1.57-2.67a.49.49,0,0,1,.28-.05Z" />
                            <path class="nodules-loader" d="M132,105.83c.33-.08,1,.74,2,2.46,1.29,2.26,1.39,4.12.54,9.44-.58,3.61,1.06,6.18,5.37,8.41,2,1,3.7,2.37,4,3.15.38,1,.28,1.34-.38,1.34-.49,0-.88-.27-.88-.6a.58.58,0,0,0-.56-.6,9.7,9.7,0,0,1-2.25-.69,17.53,17.53,0,0,0-2.5-.85c-1-.22-4.13-3.66-5.32-5.92-.8-1.53-.82-2.32-.15-5.86a18.7,18.7,0,0,0,.19-7.33c-.34-1.88-.34-2.87,0-3Z" />
                            <path class="nodules-loader" d="M140.42,103.94c-1.27-1.93-4.25-3-7.45-3.1h0a13.7,13.7,0,0,0-7.17,1.68,5.54,5.54,0,0,1-3.71.89c-2-.4-5.29,1.13-5.41,2.52-.19,2.29.1,3.94.76,4.35.39.24.94,2.14,1.23,4.23.31,2.28.87,4,1.41,4.28a1.76,1.76,0,0,1,.89,1.3c0,1.53,4.68,2,7.15.78,3.24-1.65,1.54-3-2.05-1.64-2,.75-3.58,0-4.72-2.27-.71-1.41-.87-3.61-.28-3.95l2.5-1.16c2.18-1,2.3-1.18,2.17-3.58-.2-3.78-.19-3.79,2.78-4.93,3.57-1.36,8.15-.83,10.89,1.26C141.59,106.26,141.83,106.1,140.42,103.94Zm-20.32,4.34c-.51,1.68-1.29,1.74-1.71.15-.21-.81.18-1.58,1.21-2.4a5.22,5.22,0,0,1,2.09-1.16c.38,0,.37.3-.26,1A7.64,7.64,0,0,0,120.1,108.28Zm3.75,2.43a2.89,2.89,0,0,1-1.79.72c-.88,0-1-.25-.51-1.46.77-2,2-3.94,2.56-3.94h0C124.85,106,124.63,109.93,123.85,110.71Z" />
                            <path class="nodules-loader" d="M158.13,132.8c-1.3-1.39-5.08-1.92-6.85-1s-3.58.37-3.07-1a9.52,9.52,0,0,0,.36-2.7c0-1.45.25-1.75,1.46-1.75,4.88,0,4.19-7.35-.88-9.38-1.31-.52-2.38-1.29-2.38-1.7a5.74,5.74,0,0,0-1.24-2.33c-.68-.87-1.07-1.85-.87-2.18a1.88,1.88,0,0,0-.24-1.65c-.55-1-.62-.92-.63.29,0,1.68-1.22,1.78-1.65.15-.19-.74-.51-1.14-.83-1.17h-.14c-.21.06-.42.29-.57.71a2.31,2.31,0,0,0,2.22,2.85c2.05,0,2.59,3.44.78,5-2.1,1.82-1.73,5,.86,7.26a5.82,5.82,0,0,1,2.43,4.59c.29,2.57.2,2.79-1.42,3.51-2,.88-3.74,4.42-3.21,6.52a3.5,3.5,0,0,0,1.77,2l1.42.65-1.4,2.79a27.38,27.38,0,0,1-3.84,5.36,12,12,0,0,0-2.44,3.14c0,1.34,1.87.38,4.65-2.4a25.2,25.2,0,0,0,4.25-5.65c1.56-3.32,2-3.61,5.62-3.56,3.24.05,4.1-1.33,1.23-2s-3.15-.8-3.15-1.89a8.3,8.3,0,0,1,1.24-3.09c1.08-1.78,1.46-2,3.14-1.7a21,21,0,0,1,3.12.76C159,133.77,159,133.72,158.13,132.8ZM145.44,123a6.64,6.64,0,0,1-1.2-2.65c-.31-1.72.93-2.6,2.62-2.54a6.91,6.91,0,0,1,4.26,1.87c1.56,1.41,1.4,4.87-.26,5.48C149.41,125.69,146.93,124.7,145.44,123Zm3.67,16.46c.62,1.35.58,1.38-.7.67a3.89,3.89,0,0,0-1.82-.61c-1.14.33-2.82-1.22-2.82-2.6a4,4,0,0,1,4.09-3.82h0a4,4,0,0,1,1.51.29c.8.3.8.58,0,2.5C148.68,137.52,148.62,138.37,149.11,139.45Z" />
                            <path class="nodules-loader" d="M3.3,120a1.2,1.2,0,0,1,.27,0c.5.09.39.61-.41,1.49-1.4,1.55-1.23,2.92.51,4.06s3.05.47,3.48-1.75c.18-.91.28-.72.34.61a2.59,2.59,0,0,1-1,2.53c-1.33.78-2.1.79-4,.08-3.12-1.19-3.46-5.57-.51-6.69A4.94,4.94,0,0,1,3.3,120Z" />
                            <path class="nodules-loader" d="M29.3,140.49a.43.43,0,0,1,.16,0c.77.14,1.58,2.16,1.2,3.37-.6,1.89-3.76,1.6-4.53-.43-.45-1.19-.41-1.72.16-2.09,1.21-.76,1.68-.6,1.68.59s.56,2,1.28,1.55c.29-.17.25-.83-.08-1.45s-.39-1.25,0-1.48a.44.44,0,0,1,.16-.06Z" />
                            <path class="nodules-loader" d="M25,153.12a1.61,1.61,0,0,0-1.44-.6,16.31,16.31,0,0,0-3.41.68,3.31,3.31,0,0,0-1.76,4.41c1.38,2.56,7.42,4,8.06,2C26.81,158.26,25.92,154.28,25,153.12Zm1,6.22c-.49.8-2.38.42-4.71-.94a5.92,5.92,0,0,1-2.05-1.69C18.93,156,22,154,23.32,154,24.33,154,26.49,158.43,25.92,159.34Z" />
                            <path class="nodules-loader" d="M38.76,240.24c-.06-.46-.14-1.74-.16-2.83a10.32,10.32,0,0,0-.16-2.12.41.41,0,0,1,0-.38,1.48,1.48,0,0,0,0-.75c-.12-.47-.14-.48-1.31-.34-2,.25-5.36.13-11-.4l-1.91-.18c-.47,0-1.21-.15-1.64-.23a2,2,0,0,0-.56-.08h0a1,1,0,0,0-.6.21c-.35.28-.37.53-.34,4.58,0,2.36.09,4.47.14,4.7a83.88,83.88,0,0,1,.51,8.45c0,.35.94.66,2.58.85l1.34.15c.1,0,.53.12.95.24a13.49,13.49,0,0,0,1.34.3,66.24,66.24,0,0,0,8.21-.24,4.59,4.59,0,0,1,.76-.12,2.25,2.25,0,0,0,.94-.27,1.07,1.07,0,0,1,.63-.18.61.61,0,0,0,.56-.29C39.26,250.63,39.09,242.56,38.76,240.24Zm-1.13,10.24a.8.8,0,0,0-.64.32,1.06,1.06,0,0,1-.73.36c-.3,0-1,.09-1.63.16-2.83.31-7,.14-8.17-.34a6.35,6.35,0,0,0-1.34-.2c-.57-.05-1.35-.16-1.72-.24-.75-.18-.67.15-.85-3.59a50.29,50.29,0,0,0-.39-5,69.88,69.88,0,0,1,0-7.8c0-.06,0-.1.21-.1h0a1,1,0,0,1,.37.08,2.54,2.54,0,0,0,.8.15c.36,0,2.84.21,3.69.33a50.79,50.79,0,0,0,6.52.33,32.62,32.62,0,0,1,3.67.13,25.46,25.46,0,0,1,.22,3.17,33,33,0,0,0,.23,3.44,22.94,22.94,0,0,1,.23,4.37C38.18,250.37,38.17,250.48,37.63,250.48Z" />
                            <path class="nodules-loader" d="M33,235.8c-.08,0-.19.07-.38.23s-.38.49-.28,1.32.09,1-.33,1.09l-.45.13L32,239c.27.24.45.54.4.68s.45.75.86.75c.14,0,.25-.2.25-.46,0-.5.12-.56.55-.3.19.12.24.39.16.93s0,.77.25.77c.46,0,1-.51.83-.83a1.47,1.47,0,0,1,.22-.86c.21-.39.25-.64.12-.72a2.5,2.5,0,0,1-.26-1.22c0-.67-.15-1.13-.29-1.17s-.61.64-.67,1.39-1,.74-1-.09c0-.18,0-.62,0-1a2.35,2.35,0,0,0-.21-.92c-.07-.1-.08-.17-.19-.16Z" />
                            <path class="nodules-loader" d="M31,239.71c-.4-2.58-.89-3.22-2.76-3.56-.25-.05-1.67-.09-1-.07h0c1.2,0-2.83.21-3.3.45s-.36.57.2.81.7.93.81,3.17c.06,1.1.06,1.11-.54,1.26a1.58,1.58,0,0,0-.7.31c-.15.24.3.54.89.62a1.65,1.65,0,0,1,.63.18,22.16,22.16,0,0,1,.13,2.88c0,2.2.08,2.84.31,3.1.38.42.9.33.86-.15-.07-.69-.1-6.08,0-6.14a4.74,4.74,0,0,1,.83-.16c2.06-.29,2.93-.59,3.45-1.18C31.12,240.82,31.15,240.65,31,239.71Zm-2.77,1.45a16.5,16.5,0,0,0-1.71.33c-.32.11-.4-.13-.52-1.63a9.94,9.94,0,0,0-.32-1.83c-.19-.51-.18-.66,0-.79a5.27,5.27,0,0,1,1.08-.14c-.15,0-.21,0-.07,0h0c.29,0,.25,0,.07,0a14.9,14.9,0,0,1,1.53.17c1.05.22,1.18.39,1.57,2.08C30.21,240.73,30.08,240.87,28.23,241.16Z" />
                            <polygon class="nodules-loader" points="32.74 242.01 32.74 242.01 32.74 242.01 32.74 242.01" />
                            <path class="nodules-loader" d="M36.27,246.14c.39-.13-.09-.65-.71-.76s-.7-.24-.79-.62a6.93,6.93,0,0,0-1.53-2.47c-.18-.17-.25-.26-.5-.28s-.55.32-.76,1.09c-.34,1.31-.59,1.79-.93,1.79a1.2,1.2,0,0,0-.69.39c-.31.33-.32.41-.08.55a1.23,1.23,0,0,0,.54.18c.19,0,.21.07.08.24a13.29,13.29,0,0,0-1.39,2.62.81.81,0,0,0,.23.46c.34.33.41.29.82-.48a3.08,3.08,0,0,1,.62-.84.68.68,0,0,0,.24-.52c0-.2.09-.36.19-.36s.19-.16.19-.35c0-.52.38-.71,1.34-.67,1.14,0,1.14,0,1.14.34a1.16,1.16,0,0,0,.38.59,1.1,1.1,0,0,1,.39.63,1.59,1.59,0,0,0,.34.72c.29.38.38.4.69.17s.35-.28-.08-1.14S35.59,246.38,36.27,246.14Zm-2.51-.9-.67-.11c-.46-.06-.51-.14-.4-.57s.2-.65.33-.65h0c.21,0,.28.19.49.59S33.84,245.26,33.76,245.24Z" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>

        <div id="menu">
            <div class="menu-wrapper">
                <a href="/">
                    <div class="logoHorizontal" style="background-image: url(<?php echo IMG_PATH; ?>/logoHorizontal.png)"></div>
                </a>
                <div class="menu-items">
                    <div class="menu-item">
                        <div class="txt">
                            Clínica
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 4.743 7.308">
                                <defs>
                                    <clipPath id="a">
                                        <rect width="4.743" height="7.308" fill="none" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <path d="M3.654,4.743,0,1.088,1.088,0,3.654,2.566,6.22,0,7.308,1.088Z" transform="translate(0 7.308) rotate(-90)" fill="#707070" />
                                </g>
                            </svg>
                        </div>
                        <div class="submenu" style="background-image: url(<?php echo IMG_PATH; ?>/menu-balloon.png)">
                            <div class="submenu-item">
                                <a href="/sobre-nos">
                                    <div class="text">Sobre Nós</div>
                                </a>
                            </div>
                            <div class="submenu-item">
                                <a href="/servicos">
                                    <div class="text">Serviços</div>
                                </a>
                            </div>
                            <div class="submenu-item" onClick="openMarcarForm()">
                                <div class="text">Marcação de Consulta</div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a href="/academia">
                            <div class="txt">Academia</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="/contactos">
                            <div class="txt">Contactos</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="/blog">
                            <div class="txt">Blog</div>
                        </a>
                    </div>
                    <div class="menu-item" onClick="openMarcarForm()">
                        <div class="btn">
                            <div class="txt">Marque a sua consulta</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-wrapper-mobile">
                <a href="/">
                    <div class="logoHorizontal" style="background-image: url(<?php echo IMG_PATH; ?>/logoHorizontal.png)"></div>
                </a>

                <div class="btn-menu" onClick="openMenuMobile()">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>

                <div class="close-menu" onClick="openMenuMobile()">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>

                <div class="menu-items">
                    <div class="menu-item">
                        <div class="txt">
                            Clínica
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 4.743 7.308">
                                <defs>
                                    <clipPath id="a">
                                        <rect width="4.743" height="7.308" fill="none" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <path d="M3.654,4.743,0,1.088,1.088,0,3.654,2.566,6.22,0,7.308,1.088Z" transform="translate(0 7.308) rotate(-90)" fill="#707070" />
                                </g>
                            </svg>
                        </div>
                        <div class="submenu">
                            <div class="submenu-item">
                                <a href="/sobre-nos">
                                    <div class="text">Sobre Nós</div>
                                </a>
                            </div>
                            <div class="submenu-item">
                                <a href="/servicos">
                                    <div class="text">Serviços</div>
                                </a>
                            </div>
                            <div class="submenu-item" onClick="openMarcarForm()">
                                <div class="text">Marcação de Consulta</div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a href="/academia">
                            <div class="txt">Academia</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="/contactos">
                            <div class="txt">Contactos</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="/blog">
                            <div class="txt">Blog</div>
                        </a>
                    </div>
                    <div class="menu-item" onClick="openMarcarForm()">
                        <div class="btn">
                            <div class="txt">Marque a sua consulta</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-section">