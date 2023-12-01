-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2023 at 06:55 AM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapprecufe_khacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `title_en` varchar(191) DEFAULT NULL,
  `description` longtext NOT NULL,
  `description_en` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `title_en`, `description`, `description_en`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Edukimi i mendjeve të reja: \"Roli vendimtar i artit dhe kryerja e kurseve në zhvillimin e fëmijëve\".', 'Nurturing Young Minds: \"The Crucial Role of Art and Performing Courses in Child Development\"', '<p>Në një epokë të dominuar nga përparimet teknologjike dhe presionet akademike, rëndësia e nxitjes së kreativitetit dhe vetë-shprehjes tek fëmijët nuk mund të mbivlerësohet. Kurset e artit dhe performancës ofrojnë një rrugë unike për mendjet e reja për të eksploruar dhe zhvilluar aftësi thelbësore që shtrihen shumë përtej kanavacës ose skenës. Ka një mori arsyesh pse fëmijët duhet të inkurajohen të marrin pjesë në kurse arti dhe interpretimi, duke theksuar ndikimin e thellë në zhvillimin e tyre njohës, emocional dhe social.</p><p><strong>Rritja e aftësive njohëse:&nbsp;</strong>Kurset e artit dhe performancës angazhojnë fëmijët në aktivitete që stimulojnë pjesë të ndryshme të trurit të tyre, duke nxitur zhvillimin kognitiv. Pavarësisht nëse bëhet fjalë për pikturë, vizatim, aktrim ose vallëzim, këto aktivitete kërkojnë aftësi për zgjidhjen e problemeve, të menduarit kritik dhe aftësinë për të marrë vendime në vend. Procesi i krijimit dhe performancës rrit gjithashtu kujtesën, vëmendjen ndaj detajeve dhe ndërgjegjësimin hapësinor, duke hedhur një themel të fortë për suksesin akademik.</p><p><strong>Ndërtimi i besimit dhe vetëvlerësimit:</strong>Pjesëmarrja në kurse arti dhe interpretimi i inkurajon fëmijët të shprehen lirshëm dhe pa frikë nga gjykimi. Duartrokitjet dhe reagimet pozitive të marra gjatë shfaqjeve ose ekspozitave kontribuojnë në ndjenjën e arritjes së fëmijës, duke rritur vetëvlerësimin e tyre. Ky besim i sapo gjetur shpesh shtrihet përtej studios ose skenës së artit, duke ndikuar pozitivisht në qasjen e tyre të përgjithshme ndaj sfidave dhe ndërveprimeve sociale.</p><p><strong>Kultivimi i inteligjencës emocionale:&nbsp;</strong>Shprehja artistike i lejon fëmijët të eksplorojnë dhe kuptojnë emocionet e tyre në një mjedis konstruktiv dhe të sigurt. Qoftë përmes pikturës, aktrimit apo kërcimit, fëmijët mësojnë të përcjellin ndjenjat dhe përvojat e tyre, duke nxitur inteligjencën emocionale. Ky ndërgjegjësim i rritur i emocioneve jo vetëm që kontribuon në vetërregullim më të mirë, por gjithashtu u mundëson fëmijëve të empatizohen me të tjerët dhe të lundrojnë në situata komplekse sociale.&nbsp;</p><p><strong>Promovimi i punës dhe bashkëpunimit në grup:&nbsp;</strong>Shumë kurse arti dhe interpretimi përfshijnë projekte bashkëpunuese dhe shfaqje në grup. Puna së bashku drejt një qëllimi të përbashkët nxit punën në grup, komunikimin dhe kompromisin - aftësi thelbësore për sukses në çdo mjedis social ose profesional.Fëmijët mësojnë rëndësinë e dëgjimit të të tjerëve, respektimit të opinioneve të ndryshme dhe kontribuimit të fuqive të tyre unike për të arritur një objektiv kolektiv.</p><p><strong>Inkurajimi i vlerësimit kulturor:&nbsp;</strong>Kurset e artit dhe performancës shpesh i ekspozojnë fëmijët ndaj formave të ndryshme të shprehjes artistike nga kultura dhe tradita të ndryshme.Ky ekspozim jo vetëm që zgjeron horizontet e tyre, por gjithashtu fut një vlerësim për diversitetin dhe kreativitetin.Duke u angazhuar me stile dhe tradita të ndryshme artistike, fëmijët zhvillojnë një botëkuptim më mendjehapur dhe më të ndjeshëm ndaj kulturës.&nbsp;</p><p>Në një botë që thekson gjithnjë e më shumë lëndët shkencore, vlera e artit dhe kurseve të performancës për fëmijët nuk duhet të neglizhohet.Përtej goditjeve të një peneli ose qendrës&nbsp; së vëmendjes në një skenë, këto aktivitete luajnë një rol kryesor në formimin e individëve të mirëpërcaktuar me aftësi të përmirësuara njohëse, besim, inteligjencë emocionale dhe aftësi të vlefshme sociale.Ndërsa përpiqemi të përgatisim gjeneratën e ardhshme për sukses, le të mos harrojmë fuqinë transformuese të nxitjes së kreativitetit dhe vetë-shprehjes përmes arteve.</p>', '<p><strong>Nurturing Young Minds: \"The Crucial Role of Art and Performing Courses in Child Development\"</strong></p><p>In an era dominated by technological advancements and academic pressures, the importance of fostering creativity and self-expression in children cannot be overstated. Art and performing courses provide a unique avenue for young minds to explore and develop crucial skills that extend far beyond the canvas or stage. This article delves into the myriad reasons why children should be encouraged to participate in art and performing courses, highlighting the profound impact on their cognitive, emotional, and social development.</p><p>&nbsp;<strong>Enhancing Cognitive Abilities:</strong>Art and performing courses engage children in activities that stimulate various parts of their brains, fostering cognitive development. Whether it\'s painting, drawing, acting, or dancing, these activities require problem-solving skills, critical thinking, and the ability to make decisions on the spot. The process of creating and performing also enhances memory, attention to detail, and spatial awareness, laying a solid foundation for academic success.</p><p><strong>Building Confidence and Self-Esteem:</strong>Participating in art and performing courses encourages children to express themselves freely and without fear of judgment. The applause and positive feedback received during performances or exhibitions contribute to a child\'s sense of accomplishment, boosting their self-esteem. This newfound confidence often extends beyond the art studio or stage, positively impacting their overall approach to challenges and social interactions.</p><p><strong>Cultivating Emotional Intelligence:</strong>Artistic expression allows children to explore and understand their emotions in a constructive and safe environment. Whether through painting, acting, or dancing, children learn to convey their feelings and experiences, fostering emotional intelligence. This heightened awareness of emotions not only contributes to better self-regulation but also enables children to empathize with others and navigate complex social situations.</p><p><strong>Promoting Teamwork and Collaboration:</strong>Many art and performing courses involve collaborative projects and group performances. Working together towards a common goal fosters teamwork, communication, and compromise – essential skills for success in any social or professional setting. Children learn the importance of listening to others, respecting diverse opinions, and contributing their unique strengths to achieve a collective objective.</p><p><strong>Encouraging Cultural Appreciation:</strong>Art and performing courses often expose children to diverse forms of artistic expression from various cultures and traditions. This exposure not only broadens their horizons but also instills an appreciation for diversity and creativity. By engaging with different artistic styles and traditions, children develop a more open-minded and culturally sensitive worldview.</p><p>In a world that increasingly emphasizes STEM subjects, the value of art and performing courses for children should not be overlooked. Beyond the strokes of a paintbrush or the spotlight on a stage, these activities play a pivotal role in shaping well-rounded individuals with enhanced cognitive abilities, confidence, emotional intelligence, and valuable social skills. As we strive to prepare the next generation for success, let us not forget the transformative power of fostering creativity and self-expression through the arts.</p>', 'IMG_1662-92828.png', '2023-11-27 16:54:48', '2023-11-27 16:54:51'),
(5, 'Përfitimet e fëmijëve nga klasat e kërcimit.', 'Children\'s benefits from dance classes.', '<p>Klasat e vallëzimit jo vetëm që janë argëtuese, interaktive dhe një mënyrë e shkëlqyeshme për t\'i lejuar të voglës suaj të nxjerrë lëvizjet e veta, por ka gjithashtu një shumëllojshmëri të gjerë për të zgjedhur për fëmijët e të gjitha moshave.</p><p>Klasat e vallëzimit për fëmijë promovojnë gjithashtu një ekuilibër të shëndetshëm në stilin e jetës për fëmijët dhe një vlerësim të përjetshëm të artit. Ato mund të ndezin imagjinatën e fëmijës suaj dhe të ndihmojnë në zhvillimin e forcës dhe fleksibilitetit. Ka edhe shumë përfitime të tjera, kështu që vishni këpucët tuaja të kërcimit dhe le të eksplorojmë shumë arsye pse klasat e kërcimit janë të shkëlqyera për fëmijët!</p><p>&nbsp;</p><p>&nbsp;<strong>1.Koha në ekran zhduket!</strong></p><p>&nbsp;</p><p>Si prind këto ditë, një nga shqetësimet tuaja më të mëdha ka të ngjarë të jetë koha e tepërt para ekranit. Klasat e kërcimit për fëmijë ju japin një justifikim argëtues për ta larguar fëmijën tuaj nga ekranet dhe në një mjedis ku ka stimulim fizik, mendor dhe social. Nëpërmjet mësimit intensiv nga mësuesit dhe ndërveprimit me fëmijët e tjerë, fëmija juaj do të harrojë gjithçka për mungesën e shfaqjes ose lojës së tij të preferuar, sepse ai do të jetë kaq i zhytur në të mësuarit e ritmit, teknikës, ekuilibrit dhe argëtimit!&nbsp; Dhe për shkak se shumë klasa kërcimi kërkojnë praktikë në shtëpi, fëmija juaj do të jetë aq i emocionuar për atë që mëson në studio, saqë as nuk do të mendojë të kthehet në atë iPad për orë të tëra.&nbsp;</p><p>&nbsp;</p><p><strong>2. Le të bëjmë ushtrime!</strong></p><p>&nbsp;</p><p>Një nga përfitimet më të dukshme të kërcimit është përfitimi fizik që fëmijët marrin prej tij. Klasat e kërcimit nxisin fleksibilitetin, kondicionimin e forcës, qëndrueshmërinë, presionin e gjakut të shëndetshëm dhe nivelet e kolesterolit, të cilat të gjitha çojnë në një rrezik të zvogëluar të obezitetit në fëmijëri. Dhe sa më shumë që fëmijët ushtrojnë, aq më shumë do të lodhen, që do të thotë...</p><p>&nbsp;</p><p><strong>3. Fëmija juaj do të flejë më mirë.</strong></p><p>&nbsp;</p><p>Fëmijët që nuk flenë mjaftueshëm janë në rrezik më të madh për obezitet, diabet, lëndime, shëndet të dobët mendor, çrregullime të vëmendjes dhe sjelljes dhe performancë të dobët akademike, sipas një studimi nga Qendra për Kontrollin e Sëmundjeve. Nëse fëmija juaj ka probleme me gjumin, mund të jetë e vështirë ta motivoni për të marrë pjesë në një klasë kërcimi. Por nëse mund ta realizoni, ju pret përfitimi më shumë gjumë me cilësi më të lartë. Dëgjimi, ndjekja e udhëzimeve dhe sforcimi i të mësuarit të aftësive të reja, të gjitha kontribuojnë në mendje më të qetë para gjumit dhe gjumë më të mirë.</p><p>&nbsp;</p><p><strong>4. Artet përmirësojnë vetëbesimin.</strong></p><p>&nbsp;</p><p>Klasat e kërcimit - dhe artet në përgjithësi - i ndihmojnë fëmijët të mësojnë të shoqërohen që në moshë të re. Nëpërmjet të mësuarit në një mjedis grupor, fëmijët mësojnë durimin dhe aftësitë e komunikimit duke bërë pyetje kur kanë nevojë për ndihmë. Dhe duke parë bashkëmoshatarët e tyre që luftojnë dhe kanë sukses ashtu si ata, ata mësojnë të empatizojnë të tjerët. Fëmija juaj do të mësojë aftësi të vlefshme për zgjidhjen e problemeve që do të krijojnë një atmosferë besimi. Por jo vetëm kaq, fëmija juaj do të mësojë aftësitë e lidershipit dhe të krijimit të ekipit, këmbënguljen dhe vetë-motivimin, së bashku me aftësinë për të thithur dhe mbajtur informacionin për më gjatë, të gjitha duke ndihmuar në ndërtimin e besimit dhe vetëbesimit.&nbsp;</p><p>&nbsp;</p><p><strong>5. Lëvizja nxit kreativitetin.</strong></p><p>&nbsp;</p><p>Së fundmi, klasat e kërcimit e ndihmojnë fëmijën tuaj të rehatohet me shprehjen krijuese të një game të gjerë emocionesh para të tjerëve, gjë që tregon pjekuri mendore. Por gjithashtu i ofron atij një rrugëdalje më të shëndetshme për të treguar emocione në vend që të bërtasë, ose të hedhë sende. Vallëzimi përmirëson gjendjen shpirtërore dhe trajton ankthin dhe depresionin, si dhe gjithashtu lehtëson stresin. Por mbi të gjitha, kërcimi i lejon fëmijët të përdorin imagjinatën e tyre, duke kombinuar lëvizjen shprehëse me muzikën emocionale.</p>', '<p>Not only are dance classes fun, interactive and a great way to allow your little one to get their wiggles out, but there is also a wide variety to choose from for children of all ages.</p><p>Kids dance classes also promote a healthy balance in lifestyle for children and a lifelong appreciation of the arts. They can spark your child’s imagination and help develop strength and flexibility. There are plenty of other benefits as well, so put on your dancing shoes and let’s explore the many reasons why dance classes are great for kids!</p><p>&nbsp;</p><p><strong>1. Screen time be gone</strong></p><p>&nbsp;</p><p>As a parent these days, one of your biggest concerns is most likely too much screen time. Kids dance classes give you a fun excuse to get your child off screens and into an environment where there is physical, mental&nbsp;and social stimulation. Through instructional learning from the teachers and interaction with other kids, your child will forget all about missing their favorite show or video game because they will be so immersed in learning rhythm, technique, balance and having fun! And because many dance classes require at-home practice, your child will be so excited about what they learn at the studio, they won’t even think of getting back on that iPad for hours.&nbsp;</p><p>&nbsp;</p><p><strong>2. Let\'s get exercising!</strong></p><p>&nbsp;</p><p>One of the most obvious benefits of dancing is the physical benefit kids get out of it. Dance classes promote flexibility, strength conditioning, stamina, healthy blood pressure and cholesterol levels, which all lead to a decreased risk of childhood obesity</p><p>And the more kids exercise, the more tired they’ll become, which means...</p><p>&nbsp;</p><p><strong>3. Your child will sleep better</strong></p><p>&nbsp;</p><p>Children who don’t get enough sleep are at a greater risk for obesity, diabetes, injuries, poor mental health, attention and behavior disorders, and poor academic performance, according to a study from the Center for Disease Control. If your child has trouble sleeping, it may be tough to motivate them to participate in a dance class. But if you can make it happen, the benefit of more, higher-quality sleep awaits.&nbsp;</p><p>Listening, following directions and the strain of learning new skills, all contribute to more restful minds at bedtime and better sleep.&nbsp;</p><p>&nbsp;</p><p><strong>4. The arts improve self-confidence</strong></p><p>&nbsp;</p><p>Dance classes—and the arts in general—help kids learn to socialize at an early age. Through learning in a group environment, children learn patience and communication skills by asking questions when they need help. And by watching their peers struggle and succeed just like them, they learn to empathize with others. Your child will learn valuable problem-solving skills that will build an atmosphere of trust. But not just that, your child will learn leadership and team-building skills, perseverance and self-motivation, along with the ability to absorb and hold information for longer, all helping to build confidence and self-assurance.</p><p>&nbsp;</p><p><strong>5. Movement fosters creativity&nbsp;</strong></p><p>&nbsp;</p><p>Lastly, dance classes help your child become comfortable with creatively expressing a wide range of emotions in front of others, which shows mental maturity. But it also offers him a healthier outlet to show emotion rather than yelling, screaming or throwing objects. Dancing improves mood and tackles anxiety and depression and also relieves stress. But most of all, dancing allows children to use their imagination, combining expressive movement with emotional music.&nbsp;</p>', 'blog 2-16611.png', '2023-11-27 18:07:53', '2023-11-27 18:07:55'),
(6, '5 përfitimet e klasave të artit.', '5 benefits of art classes.', '<p>Fëmijët janë natyrshëm krijues me dëshirën e tyre. Por nëse kreativiteti i tyre nuk nxitet, ata fillojnë ta humbasin atë ndërsa rriten. Pablo Picasso tha: \"Çdo fëmijë është një artist. Problemi është se si të mbetemi artist pasi të rritemi.\"</p><p>&nbsp;</p><p>Ekziston një shumëllojshmëri gjithnjë në rritje e klasave të artit në dispozicion për fëmijët e të gjitha moshave.Ja se si orët e artit për fëmijë ndihmojnë në përgatitjen e fëmijës suaj për sukses në jetë.</p><p>&nbsp;</p><p><strong>1. Arti ndihmon në përmirësimin e aftësive motorike.</strong></p><p>&nbsp;</p><p>Një nga përfitimet më themelore të klasave të artit, veçanërisht për fëmijët e vegjël, është përmirësimi i aftësive motorike. Për shkak se ka shumë lloje të ndryshme arti - nga piktura në skulpturë te vizatimi - kërkohen një shumëllojshmëri mjetesh dhe teknikash. Për shumë fëmijë të vegjël, lufta e vërtetë është kur bëhet fjalë për përdorimin dhe zhvillimin e muskujve të tyre të vegjël për të mbajtur dhe përdorur objektet në mënyrë korrekte. Klasat e artit i mësojnë fëmijët se si të mbajnë siç duhet një penel, lapsa ose shënues dhe të ndërtojnë muskujt e duarve ndërsa luajnë me argjilë. Nxënësit e rritur do të përfitojnë duke mësuar teknikat e duhura të pikturës ose vizatimit, madje do të ndërtojnë muskuj kur mësojnë të krijojnë forma më të kërkuara fizikisht të artit si skulpturat.</p><p>&nbsp;</p><p><strong>2. Të krijosh mësim do të thotë të marrësh vendime.&nbsp;</strong></p><p>&nbsp;</p><p>Gjatë procesit krijues – qoftë përmes artit pamor, shkrimit apo aktiviteteve të tjera – ne shpesh kalojmë një periudhë të rrjedhës së vetëdijes në fillim të një projekti, pastaj kthehemi dhe marrim vendime strategjike, duke rishikuar idetë tona derisa të jemi të kënaqur me rezultatin final. Kur fëmijët e vegjël krijojnë, ata kalojnë të njëjtën periudhë të rrjedhës së vetëdijes&nbsp;dhe shpesh janë të kënaqur me rezultatin përfundimtar. Megjithatë, ndërsa rriten dhe personaliteti i tyre zhvillohet, idetë e tyre fillojnë të bëhen më të ndërlikuara. Dhe kështu ata rishikojnë, duke marrë vendime për t\'u përpjekur të përputhen me idetë në kokën e tyre. Nëpërmjet kësaj, ata fillojnë të mësojnë pasojat e vendimeve të tyre dhe se si ato vendime ndikojnë në procesin krijues.&nbsp;</p><p>&nbsp;</p><p><strong>3. Arti i mëson fëmijët të jenë më të vetëdijshëm për veten dhe të tjerët.</strong></p><p>&nbsp;</p><p>Pjesë e procesit krijues në klasat e artit për fëmijë është të mësuarit rreth artistëve të ndryshëm dhe shumëllojshmërisë së metodave që ata artistë përdorin për të krijuar artin e tyre. Kjo do të thotë se fëmija juaj do të mësojë për stile të ndryshme artistike me origjinë nga e gjithë bota. Por klasat e artit ndihmojnë gjithashtu fëmijën tuaj të kuptojë këndvështrime të ndryshme dhe çfarë po mendonte artisti kur krijoi veprën e tij. Ai i ndihmon fëmijët të vlerësojnë mënyrat e ndryshme të të shprehurit që mund të kenë të tjerët, të formojnë dhe vlerësojnë opinionet, të vlerësojnë bukurinë rreth tyre dhe mënyrën se si të tjerët e interpretojnë atë.&nbsp;</p><p>&nbsp;</p><p><strong>4. Krijimi i artit mëson përqendrimin dhe këmbënguljen.</strong></p><p>&nbsp;</p><p>Të bësh art është një proces. Ndërsa fëmija juaj rritet, vizionet e tij krijuese do të bëhen më të ndërlikuara, duke kërkuar më shumë kohë, vëmendje dhe teknikë për të përmbushur kërkimin e tyre artistik. Ata pa dyshim do të zhgënjehen dhe do të duan të heqin dorë nganjëherë. Klasat e artit ndihmojnë në zhvillimin e zanatit të fëmijës suaj dhe menaxhimin e pritjeve të tij. Ata do të mësojnë se procesi krijues është diçka që zhvillohet me kalimin e kohës dhe se përsosja e aftësive dhe teknikave të dikujt nuk ndodh brenda natës! Fëmija juaj do të mësojë t\'i shohë idetë e tij deri në fund, që është një mësim i rëndësishëm që ai do ta mbajë me vete gjatë gjithë jetës së tij.&nbsp;</p><p>&nbsp;</p><p><strong>5. Arti i ndihmon fëmijët të shprehin emocionet e tyre në një mënyrë pozitive.</strong></p><p>&nbsp;</p><p>Ndoshta më shumë se çdo gjë tjetër, arti i ndihmon fëmijët të shprehin emocionet në një mënyrë kuptimplotë dhe të ndershme. Sipas një raporti të vitit 2015 nga National Endowment for the Arts, aktivitetet e artit i ndihmojnë fëmijët të rregullojnë emocionet e tyre në mënyrë që të mësojnë se si të kontrollojnë veten kur janë të pushtuar nga zemërimi dhe zhgënjimi. Fëmijët fitojnë një ndjenjë besimi ndërsa marrin emocionet që ndjejnë, i pranojnë dhe i përpunojnë ato në diçka vizuale.</p>', '<p>Children are naturally creative on their own accord. But if their creativity isn\'t fostered, they begin to lose it as they grow. Pablo Picasso said, \"Every child is an artist. The problem is how to remain an artist once we grow up.\"</p><p>There is an ever-growing variety of art classes available for kids of all ages. Here\'s how kids art classes help prepare your child for success in life.</p><p>&nbsp;</p><p><strong>1. Art helps improve motor skills.</strong></p><p>&nbsp;</p><p>One of the most basic benefits of art classes, particularly for toddlers, is the improvement of motor skills. Because there are so many different types of art – from painting to sculpture to drawing – a variety of tools and techniques are required. For many small children, the struggle is real when it comes to using and developing their tiny muscles to hold and use objects correctly. Art classes teach children how to properly hold a paintbrush, pencils or markers and build hand muscles while playing with clay. Older students will benefit by learning proper painting or drawing techniques, and even build muscle when learning to create more physically-demanding forms of art like sculptures.</p><p>&nbsp;</p><p><strong>2. Creating learning means to make decisions.</strong></p><p>&nbsp;</p><p>During the creative process — whether it\'s through visual art, writing, or other activities — we often go through a stream-of-consciousness period at the beginning of a project, then go back and strategically make decisions, revising our ideas until we are satisfied with the finished product. When young children create, they go through that same period of stream-of-consciousness and are often satisfied with the end result. As they get older, however, and their personalities develop, their ideas start to become more complicated. And so they revise, making decisions to try to match the ideas in their heads. Through this, they begin to learn the consequences of their decisions, and how those decisions affect the creative process.&nbsp;</p><p>&nbsp;</p><p><strong>3. Art teaches children to be more aware of themselves and others.</strong></p><p>&nbsp;</p><p>Part of the creative process in kids art classes is learning about different artists and the variety of methods those artists use to create their art. This means your child will learn about different artistic styles originating from around the world. But art classes also help your child understand different perspectives, and what the artist was thinking when they created their piece. It helps kids appreciate the different modes of expression others may have, to form and value opinions, to appreciate the beauty around them and how others interpret it.&nbsp;</p><p>&nbsp;</p><p><strong>4. Creating art teaches focus and perseverance.</strong></p><p>&nbsp;</p><p>Making art is a process. As your child gets older, their creative visions will become more complicated, requiring more time, attention and technique to fulfil their artistic quest. They will no doubt get frustrated and want to quit at times. Art classes help develop your child\'s craft and manage their expectations. They will learn that the creative process is something that\'s developed over time, and that honing one\'s skills and techniques doesn\'t happen overnight! Your child will learn to see their ideas through to the end, which is an important lesson they will carry with themselves for the rest of their lives.</p><p>&nbsp;</p><p><strong>5. Art helps children express their emotions in a positive way.</strong></p><p>&nbsp;</p><p>Perhaps more so than anything else, art helps children express emotion in a meaningful and honest way. According to a 2015 report by the National Endowment for the Arts, art activities help kids regulate their emotions so they learn how to control themselves when they are overwhelmed by anger and frustration. Kids gain a sense of confidence as they take the emotions they are feeling, acknowledge and process them into something visual.</p>', 'AC9A4116 crop-70652.png', '2023-11-27 18:11:56', '2023-11-27 18:11:57'),
(7, 'Fuqizimi i zërave të rinj: Roli i tregimit në kurset e arteve interpretuese  për fëmijë.', 'Empowering Young Voices: The Role of Storytelling in Children\'s Performing Arts Courses.', '<p>Në një botë të përmbytur me ekrane dhe shpërqendrime dixhitale, arti i tregimit mbetet një medium i përjetshëm dhe i fuqishëm për lidhjen dhe shprehjen njerëzore. Kur bëhet fjalë për zhvillimin e fëmijëve, integrimi i tregimit në kurset e arteve interpretuese shfaqet si një mjet transformues për fuqizimin e zërave të rinj. Ky artikull thellohet në rolin domethënës që luan tregimi në edukimin e fëmijëve për artet interpretuese, duke eksploruar se si rrit aftësitë e tyre komunikuese, nxit kreativitetin dhe ushqen një ndjenjë vetëbesimi.</p><p>&nbsp;</p><p><strong>Zhvillimi i aftësive gjuhësore dhe komunikimit:</strong></p><p>&nbsp;</p><p>Tregimi është një mjet dinamik për zhvillimin e gjuhës tek fëmijët. Pjesëmarrja në kurset e arteve interpretuese që përfshijnë tregimin i ekspozon mendjet e të rinjve ndaj fjalorëve të ndryshëm, strukturave të fjalive dhe gjuhës shprehëse.Teksa interpretojnë personazhe dhe rrëfejnë histori, fëmijët natyrshëm përsosin aftësitë e tyre të komunikimit verbal, duke rritur aftësinë e tyre për të artikuluar mendimet dhe emocionet.&nbsp;</p><p>&nbsp;</p><p><strong>Nxitja e kreativitetit dhe imagjinatës:</strong></p><p>&nbsp;</p><p>Bota e tregimit është një sferë e pakufishme e imagjinatës dhe përfshirja e saj në kurset e arteve interpretuese u ofron fëmijëve një kanavacë për të shpalosur krijimtarinë e tyre. Qoftë përmes shfaqjeve të shkruara ose ushtrimeve improvizuese, tregimi i inkurajon fëmijët të mendojnë jashtë kutisë, të zhvillojnë tregime unike dhe të eksplorojnë potencialin e tyre imagjinativ. Këto aftësi shtrihen përtej skenës, duke ndikuar në zgjidhjen e problemeve dhe inovacionin në aspekte të ndryshme të jetës së tyre.&nbsp;</p><p>&nbsp;</p><p><strong>Ndërtimi i besimit përmes karakterizimit:</strong></p><p>&nbsp;</p><p>Kurset e arteve performuese shpesh përfshijnë lojën me role dhe zhvillimin e karakterit, duke i lejuar fëmijët të hyjnë në këpucët e personaliteteve të ndryshme. Nëpërmjet mishërimit të personazheve të ndryshëm dhe prezantimit të historive para audiencës, fëmijët fitojnë një ndjenjë të thellë vetëbesimi. Ky vetësigurim i sapogjetur është i paçmuar, jo vetëm për shfaqjet e ardhshme, por edhe në situatat e përditshme ku komunikimi efektiv dhe vetë-prezantimi janë thelbësore.&nbsp;</p><p>&nbsp;</p><p><strong>Rritja e inteligjencës emocionale:</strong></p><p>&nbsp;</p><p>Tregimi është një udhëtim emocional që i ndihmon fëmijët të lidhen me ndjenjat e tyre dhe të të tjerëve. Kur angazhohen në kurse të arteve&nbsp;interpretuese që përfshijnë tregimin, fëmijët mësojnë të përcjellin një sërë emocionesh përmes performancave të tyre, duke nxitur inteligjencën emocionale. Ky ndërgjegjësim i rritur i emocioneve kontribuon në vetërregullim më të mirë, ndjeshmëri dhe një kuptim të nuancave komplekse të ndërveprimit njerëzor.&nbsp;</p><p>&nbsp;</p><p><strong>Inkurajimi i bashkëpunimit dhe punës ekipore:</strong></p><p>&nbsp;</p><p>Tregimi shpesh përfshin përpjekje bashkëpunuese, pavarësisht nëse është në krijimin e një skenari, koordinimin e një skene ose ekzekutimin e një shfaqjeje në grup. Kurset e arteve performuese ofrojnë një platformë unike për fëmijët që të punojnë së bashku, duke nxitur punën ekipore, komunikimin efektiv dhe aftësinë për të bërë kompromis për suksesin e narrativës kolektive.</p><p>Në sixhadenë e edukimit të fëmijëve për artet skenike, tregimi shfaqet si një fije e artë që bashkon zhvillimin gjuhësor, kreativitetin, besimin, inteligjencën emocionale dhe aftësitë bashkëpunuese.Nëpërmjet tregimit, fëmijët jo vetëm që gjejnë zërat e tyre, por gjithashtu mësojnë të rezonojnë me narrativat e ndryshme që e bëjnë botën tonë të pasur dhe të gjallë.</p>', '<p>In a world inundated with screens and digital distractions, the art of storytelling remains a timeless and powerful medium for human connection and expression. When it comes to children\'s development, integrating storytelling into performing arts courses emerges as a transformative tool for empowering young voices. This article delves into the significant role that storytelling plays in children\'s performing arts education, exploring how it enhances their communication skills, fosters creativity, and nurtures a sense of self-confidence.</p><p>&nbsp;</p><p><strong>&nbsp;Developing Language and Communication Skills:</strong></p><p>&nbsp;</p><p>Storytelling is a dynamic vehicle for language development in children. Participating in performing arts courses that involve storytelling exposes young minds to diverse vocabularies, sentence structures, and expressive language. As they enact characters and narrate stories, children naturally refine their verbal communication skills, enhancing their ability to articulate thoughts and emotions.</p><p>&nbsp;</p><p><strong>&nbsp; Fostering Creativity and Imagination:</strong></p><p>&nbsp;</p><p>The world of storytelling is a boundless realm of imagination, and incorporating it into performing arts courses provides children with a canvas to unleash their creativity. Whether through scripted performances or improvisational exercises, storytelling encourages children to think outside the box, develop unique narratives, and explore their imaginative potential.&nbsp;These skills extend beyond the stage, influencing problem-solving and innovation in various aspects of their lives.</p><p>&nbsp;</p><p><strong>&nbsp;Building Confidence through Characterization:</strong></p><p>&nbsp;</p><p>Performing arts courses often involve role-playing and character development, allowing children to step into the shoes of diverse personalities. Through embodying different characters and presenting stories to an audience, children gain a profound sense of self-confidence. This newfound self-assurance is invaluable, not only for future performances but also in everyday situations where effective communication and self-presentation are essential.</p><p>&nbsp;</p><p>&nbsp;<strong>Enhancing Emotional Intelligence:</strong></p><p>&nbsp;</p><p>Storytelling is an emotional journey that helps children connect with their feelings and those of others. When engaged in performing arts courses that incorporate storytelling, children learn to convey a range of emotions through their performances, fostering emotional intelligence. This heightened awareness of emotions contributes to better self-regulation, empathy, and an understanding of the complex nuances of human interaction.</p><p>&nbsp;</p><p>&nbsp;<strong>Encouraging Collaboration and Teamwork:</strong></p><p>&nbsp;</p><p>Storytelling often involves collaborative efforts, whether it\'s in the creation of a script, the coordination of a scene, or the execution of a group performance. Performing arts courses provide a unique platform for children to work together, fostering teamwork, effective communication, and the ability to compromise for the success of the collective narrative.</p><p>&nbsp;</p><p>In the tapestry of children\'s performing arts education, storytelling emerges as a golden thread that weaves together language development, creativity, confidence, emotional intelligence, and collaborative skills.&nbsp;Through storytelling, children not only find their voices but also learn to resonate with the diverse narratives that make our world rich and vibrant.</p>', 'blog 4-20979.png', '2023-11-27 18:14:15', '2023-11-27 18:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `surname` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `event_id`, `name`, `surname`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 7, 'Uriah Madden', 'Klein', 'vemon@mailinator.com', '+1 (419) 874-8764', '2023-11-09 15:27:31', '2023-11-09 15:27:31'),
(2, 8, 'Chiquita Mcneil', 'Mccall', 'zyqutawap@mailinator.com', '+1 (747) 159-7987', '2023-11-14 15:25:59', '2023-11-14 15:25:59'),
(3, 8, 'Jenette Holder', 'Allen', 'biko@mailinator.com', '+1 (438) 545-3761', '2023-11-14 15:26:06', '2023-11-14 15:26:06'),
(4, 8, 'Reece Blanchard', 'Santos', 'vucoqa@mailinator.com', '+1 (278) 886-6608', '2023-11-14 15:26:14', '2023-11-14 15:26:14'),
(5, 8, 'Daniel Neal', 'Griffin', 'pyse@mailinator.com', '+1 (946) 842-6499', '2023-11-14 15:28:30', '2023-11-14 15:28:30'),
(8, 10, 'Basia Rhodes', 'Yang', 'kubatol@mailinator.com', '+1 (282) 593-5749', '2023-11-14 15:51:28', '2023-11-14 15:51:28'),
(9, 10, 'Emery Dale', 'Morse', 'qege@mailinator.com', '+1 (379) 327-2147', '2023-11-14 17:18:36', '2023-11-14 17:18:36'),
(11, 10, 'Cecilia Marsh', 'Holland', 'civera@mailinator.com', '+1 (707) 395-3788', '2023-11-14 17:21:36', '2023-11-14 17:21:36'),
(12, 6, 'Rudyard Carr', 'Wade', 'zewe@mailinator.com', '+1 (742) 889-4306', '2023-11-17 19:18:47', '2023-11-17 19:18:47'),
(13, 6, 'Scott Summers', 'Acevedo', 'begybiqy@mailinator.com', '+1 (164) 162-7492', '2023-11-17 19:50:50', '2023-11-17 19:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `shipping_fee` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `shipping_fee`) VALUES
(4, 'Berat', 1, 250),
(3, 'Belsh', 1, 100),
(2, 'Ballsh', 1, 300),
(1, 'Bajram Curri', 1, 300),
(5, 'Bilisht', 1, 300),
(6, 'Borsh', 1, 300),
(7, 'Bulqize', 1, 300),
(8, 'Burrel', 1, 300),
(9, 'Cakran', 1, 300),
(10, 'Cerrik', 1, 300),
(11, 'Çorovode', 1, 300),
(12, 'Delvine', 1, 300),
(13, 'Devoll', 1, 300),
(14, 'Divjake', 1, 300),
(15, 'Dropull', 1, 300),
(16, 'Durres', 1, 300),
(17, 'Elbasan', 1, 300),
(18, 'Erseke', 1, 300),
(19, 'Fier', 1, 300),
(20, 'Finiq', 1, 300),
(21, 'Fushe-Arrez', 1, 300),
(22, 'Fushe-Kruje', 1, 300),
(23, 'Gjirokaster', 1, 300),
(24, 'Gramsh', 1, 300),
(25, 'Has', 1, 300),
(26, 'Himare', 1, 300),
(27, 'Kamez', 1, 300),
(28, 'Kavaje', 1, 300),
(29, 'Kelcyre', 1, 300),
(30, 'Kerrabe', 1, 300),
(31, 'Klos', 1, 300),
(32, 'Kolonje', 1, 300),
(33, 'Konispol', 1, 300),
(34, 'Koplik', 1, 300),
(35, 'Korce', 1, 300),
(36, 'Kraste', 1, 300),
(37, 'Kruje', 1, 300),
(38, 'Krume', 1, 300),
(39, 'Ksamil', 1, 300),
(40, 'Kuçove', 1, 300),
(41, 'Kukes', 1, 300),
(42, 'Kurbin', 1, 300),
(43, 'Lac', 1, 300),
(44, 'Leskovik', 1, 300),
(45, 'Lezhe', 1, 300),
(46, 'Libohove', 1, 300),
(47, 'Librazhd', 1, 300),
(48, 'Lushnje', 1, 300),
(49, 'Malesi e Madhe', 1, 300),
(50, 'Maliq', 1, 300),
(51, 'Mallakaster', 1, 300),
(52, 'Mamurras', 1, 300),
(53, 'Mat', 1, 300),
(54, 'Memaliaj', 1, 300),
(55, 'Milot', 1, 300),
(56, 'Mirdite', 1, 300),
(57, 'Orikum', 1, 300),
(58, 'Orikum', 1, 300),
(59, 'Patos', 1, 300),
(60, 'Peqin', 1, 300),
(61, 'Permet', 1, 300),
(62, 'Perrenjas', 1, 300),
(63, 'Peshkopi', 1, 300),
(64, 'Peze', 1, 300),
(65, 'Pogradec', 1, 300),
(66, 'Polican', 1, 300),
(67, 'Puke', 1, 300),
(68, 'Pustec', 1, 300),
(69, 'Roskovec', 1, 300),
(70, 'Rreshen', 1, 300),
(71, 'Rrogozhine', 1, 300),
(72, 'Rubik', 1, 300),
(73, 'Sarande', 1, 300),
(74, 'Selenice', 1, 300),
(75, 'Shengjin', 1, 300),
(76, 'Shijak', 1, 300),
(77, 'Shkoder', 1, 300),
(78, 'Shtermeni', 1, 300),
(79, 'Skrapar', 1, 300),
(80, 'Sukth', 1, 300),
(81, 'Tepelene', 1, 300),
(82, 'Tirane', 1, 300),
(83, 'Tropoje', 1, 300),
(84, 'Ura Vajgurore', 1, 300),
(85, 'Vaqarr', 1, 300),
(86, 'Vlore', 1, 300),
(87, 'Vore', 1, 300),
(88, 'Deçan', 2, 300),
(89, 'Dragosh', 2, 300),
(90, 'Drenas', 2, 300),
(91, 'Ferizaj', 2, 300),
(92, 'Fushe Kosove', 2, 300),
(93, 'Gjakove', 2, 300),
(94, 'Gjilan', 2, 300),
(95, 'Graçanice', 2, 300),
(96, 'Hani i Elezit', 2, 300),
(97, 'Istog', 2, 300),
(98, 'Junik', 2, 300),
(99, 'Kaçanik', 2, 300),
(100, 'Kamenice', 2, 300),
(101, 'Kline', 2, 300),
(102, 'Kllokot', 2, 300),
(103, 'Leposaviq', 2, 300),
(104, 'Lipjan', 2, 300),
(105, 'Malisheve', 2, 300),
(106, 'Mamushe', 2, 300),
(107, 'Mitrovice', 2, 300),
(108, 'Novoberde', 2, 300),
(109, 'Obiliq', 2, 300),
(110, 'Partesh', 2, 300),
(111, 'Peje', 2, 300),
(112, 'Podujeve', 2, 300),
(113, 'Prishtine', 2, 300),
(114, 'Prizren', 2, 300),
(115, 'Rahovec', 2, 300),
(116, 'Ranillug', 2, 300),
(117, 'Shterpce', 2, 300),
(118, 'Shtime', 2, 300),
(119, 'Skenderaj', 2, 300),
(120, 'Suhareke', 2, 300),
(121, 'Viti', 2, 300),
(122, 'Vushtrri', 2, 300),
(123, 'Zubin Potok', 2, 300),
(124, 'Zveçan', 2, 300),
(125, 'Berove', 3, 300),
(126, 'Bitola', 3, 300),
(127, 'Bogovine', 3, 300),
(128, 'Brod', 3, 300),
(129, 'Dellçeve', 3, 300),
(130, 'Demir Hisar', 3, 300),
(131, 'Dibre', 3, 300),
(132, 'Gjevgjeli', 3, 300),
(133, 'Gostivar', 3, 300),
(134, 'Kavadar', 3, 300),
(135, 'Kerçove', 3, 300),
(136, 'Koçan', 3, 300),
(137, 'Kratove', 3, 300),
(138, 'Kriva Pallanke', 3, 300),
(139, 'Krusheve', 3, 300),
(140, 'Komanove', 3, 300),
(141, 'Likove', 3, 300),
(142, 'Manastir', 3, 300),
(143, 'Negotine', 3, 300),
(144, 'Oher', 3, 300),
(145, 'Prilep', 3, 300),
(146, 'Probishtip', 3, 300),
(147, 'Radovisht', 3, 300),
(148, 'Resnje', 3, 300),
(149, 'Shkup', 3, 300),
(150, 'Shtip', 3, 300),
(151, 'Struge', 3, 300),
(152, 'Strumice', 3, 300),
(153, 'Sveti Nikolle', 3, 300),
(154, 'Tetove', 3, 300),
(155, 'Vallandove', 3, 300),
(156, 'Veles', 3, 300),
(157, 'Vinice', 3, 300),
(158, 'Vrapçisht', 3, 300);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `surname` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `name_en` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `teachers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`teachers`)),
  `days` varchar(191) DEFAULT NULL,
  `times` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`times`)),
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `name_en`, `description`, `description_en`, `image`, `status`, `teachers`, `days`, `times`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(8, 'Kitare', 'Guitar', '<p>Një kurs emocionues për kitare i krijuar për yje të rinj të muzikës të moshës 5 vjeç e lart. Në këtë program dinamik, fëmijët zhyten në botën e muzikës përmes aktiviteteve ndërvepruese, duke mësuar të këndojnë melodi dhe ritme tërheqëse. Me fokus në ndërtimin e një themeli të fortë muzikor dhe nxitjen e krijimtarisë, gishtat e rinj zhvillojnë shkathtësi në frets.<br>Bashkohuni me ne për një aventurë muzikore të paharrueshme!</p>', '<p>An exciting guitar course designed for budding music stars ages 5 and older.&nbsp; In this dynamic program, children dive into the world of music through interactive activities, learning to strum catchy tunes and rhythms. With a focus on building a strong musical foundation and fostering creativity, young fingers develop agility on the frets. Join us for an unforgettable musical adventure!</p>', 'guitar-95451.png', 1, '\"[\\\"John Doe\\\",\\\"John 2\\\"]\"', 'Mon-Fri', '\"[\\\"12:00\\\",\\\"18:00\\\"]\"', NULL, NULL, '2023-11-08 16:22:11', '2023-11-24 15:46:03'),
(9, 'Piano', 'Piano', '<p>Ju prezantojmë me kursin e pianos i përshtatur për fëmijët e moshës 5 vjeç e lart.Ky program i këndshëm i prezanton muzikantët e rinj me botën magjepsëse të pianos, duke e bërë mësimin një përvojë të këndshme. Eksploroni melodi të thjeshta dhe vjersha për fëmijë, duke ndërtuar një themel në muzikë dhe ritëm.Zhvilloni aftësi të shkëlqyera motorike përmes lojës praktike në piano, duke hedhur bazat për aftësi muzikore.<br>Bashkohuni me ne për një hyrje harmonike në botën e muzikës!</p>', '<p>We present you with piano courses adapted for children aged 5 years and older.This playful program introduces budding musicians to the enchanting world of piano, making learning a delightful experience. Explore simple tunes and nursery rhymes, building a foundation in music and rhythm. Develop fine motor skills through hands-on piano play, laying the groundwork for musical proficiency.&nbsp;<br>Join us for a harmonious introduction to the world of music!</p>', 'IMG_0423-50593.png', 1, '\"[\\\"John Doe\\\",\\\"John Doe\\\"]\"', 'Mon-Fri', '\"[\\\"18:00\\\",\\\"15:00\\\"]\"', NULL, NULL, '2023-11-08 16:26:07', '2023-11-27 18:20:20'),
(11, 'Kercim', 'Dance', '<p>Filloni një aventurë magjike kërcimi me ne, një kurs i krijuar posaçërisht për fëmijët e moshës 3 vjeç e lart. Të fokusuara në nxitjen e krijimtarisë dhe koordinimit, seancat tona të lezetshme ndërthurin lojën me imagjinatë, eksplorimet tematike të kërcimit dhe ritmet e gëzueshme. Nga krahët e zanave te meloditë e gjalla, çdo klasë është një festë e të shprehurit. Bashkohuni me ne për të dëshmuar lulëzimin e besimit të vogëlushit tuaj përmes lëvizjeve krijuese, miqësive lozonjare dhe shfaqjeve tërheqëse. Regjistrohuni dhe lëreni magjinë e kërcimit të shpaloset për kërcimtarët tuaj më të vegjël!</p>', '<p>Embark on a magical dance adventure with us, a specially crafted course for children aged 3 and above. Focused on fostering creativity and coordination, our delightful sessions blend imaginative play, themed dance explorations, and joyful rhythms. From fairy wings to lively tunes, every class is a celebration of expression. Join us to witness your little one\'s confidence bloom through creative movement, playful friendships, and endearing showcases. Enroll and let the enchantment of dance unfold for your youngest dancers!</p>', 'AC9A4934-33329.png', 1, '\"[\\\"test\\\"]\"', 'Mon-Fri', '\"[\\\"14:00\\\"]\"', NULL, NULL, '2023-11-21 16:26:28', '2023-11-27 18:18:52'),
(13, 'Aktrim', 'Acting', '<p>Ju prezantojmë me kursin e aktrimit i përshtatur për fëmijët e moshës 3 vjeç e lart.Ky program magjepsës ndez kreativitetin, besimin dhe dashurinë për tregimin. Angazhohuni në lojëra dramatike, duke nxitur aftësitë e tregimit dhe duke rritur besimin. Ndizni imagjinatën me kostume dhe rekuizita, duke sjellë në jetë personazhet. Mësoni bazat e skenës, krijoni besimin në shprehi përmes lojërave.Promovoni aftësitë sociale nëpërmjet punës ekipore dhe krijimit së bashku. Bashkohuni me ne për një udhëtim të paharrueshëm në botën e aktrimit!</p>', '<p>We present you with acting courses adapted for children aged 3 years and older.This fascinating program ignites creativity, confidence and a love of storytelling. Engage in dramatic play, fostering storytelling skills and boosting confidence.Ignite imagination with costumes and props, bringing characters to life.Learn stage fundamentals, building confidence in expression through games.Promote social skills through teamwork and creating together. Join us for an unforgettable journey into the world of acting!</p>', 'IMG_3522-70340.png', 1, '\"[null]\"', NULL, '\"[null]\"', NULL, NULL, '2023-11-23 20:53:35', '2023-11-27 18:21:06'),
(14, 'Kendim', 'Singing', '<p>Ju prezantojmë me kursin e këndimit i përshtatur për fëmijët e moshës 5 vjeç e lart. Programi ynë e transformon mësimin në një eksplorim të gëzueshëm të të kënduarit, ndërsa fëmijët zbulojnë magjinë e zërave të tyre përmes seancave argëtuese dhe interaktive. I udhëhequr nga pedagogë me përvojë, ky kurs ushqen aftësitë vokale, ndërton besimin dhe i prezanton këngëtarët e rinj në një botë të shprehive muzikore. Regjistro për një rrugëtim emocionues në botën e melodisë dhe të vetë-zbulimit!</p>', '<p>We present you with singing courses adapted for children aged 5 years and older. Our program transforms learning into a joyous exploration of singing, as children discover the magic of their own voices through fun and interactive sessions. Guided by experienced instructors, this course nurtures vocal skills, builds confidence, and introduces young singers to a world of musical expression. Enroll for an uplifting journey into the world of melody and self-discovery!</p>', 'DSC02027-64527.png', 1, '\"[null]\"', NULL, '\"[null]\"', NULL, NULL, '2023-11-23 20:55:38', '2023-11-27 18:17:38'),
(15, 'Pikture', 'Painting', '<p>Ju prezantojmë me kursin e pikturës i përshtatur për fëmijët e moshës 5 vjeç e lart. I udhëhequr nga pedagogë profesionist , ky program dinamik e transformon kanavacën në një shesh lojrash imagjinate, duke i futur talentet e rinj me teknikat themelore të pikturës dhe duke inkurajuar vetë-shprehjen përmes ngjyrave të gjalla. Regjistroni artistin tuaj të vogël për një eksplorim frymëzues në botën e pikturës!</p>', '<p>We present you with painting courses adapted for children aged 5 years and older. Led by skilled instructors, this dynamic program transforms the canvas into a playground of imagination, introducing young talents to fundamental painting techniques and encouraging self-expression through vibrant colors. Enroll your young artist for an inspiring exploration into the world of painting!</p>', 'moviecover-92735.png', 1, '\"[null]\"', NULL, '\"[null]\"', NULL, NULL, '2023-11-23 20:56:35', '2023-11-24 15:49:24'),
(16, 'Art&Craft', 'Art&Craft', '<p>Ju prezantojmë me kursin e Art&amp;Crafts i përshtatur për fëmijët e moshës 3 vjeç e lart.&nbsp; I udhëhequr nga pedagogë me përvojë, ky program praktik i prezanton të vegjlit me mrekullitë e artit dhe artizanatit përmes projekteve të përshtatshme për moshën.&nbsp;Bashkohuni me ne për një rrugëtim të këndshëm ku duart e vogla transformojnë materialet e përditshme në vepra të jashtëzakonshme arti, duke nxitur një vlerësim të përjetshëm për kreativitetin!</p>', '<p>We present you with Art&amp;Crafts courses adapted for children aged 3 years and older.&nbsp; Guided by experienced instructors, this hands-on program introduces toddlers to the wonders of art and crafts through age-appropriate projects. Join us for a delightful journey where tiny hands transform everyday materials into extraordinary works of art, fostering a lifelong appreciation for creativity!</p>', 'moviecover-13458.png', 1, '\"[null]\"', NULL, '\"[null]\"', NULL, NULL, '2023-11-23 20:57:15', '2023-11-24 15:47:05'),
(17, 'Fotografi', 'Photography', '<p>Ju prezantojmë me kursin e fotografisë i përshtatur për adoleshentët e moshës 14 vjeç+. I udhëhequr nga pedagogë me përvojë, ky program dinamik i prezanton entuziastët e rinj me artin dhe teknikat e fotografisë, duke mbuluar kompozimin, ndriçimin dhe montimin. Nga zotërimi i bazave të funksioneve të kamerës deri te eksplorimi i projekteve kreative fotografike,&nbsp; kursi ofron një platformë praktike për adoleshentët që të zhvillojnë aftësitë e tyre fotografike.&nbsp; Bashkohuni me ne për një rrugëtim frymëzues në fushën magjepsëse të tregimit vizual dhe krijimit të imazheve!</p>', '<p>We present you with photography courses adapted for teenagers aged 14 and above. Led by experienced instructors, this dynamic program introduces young enthusiasts to the art and technicalities of photography, covering composition, lighting, and editing. From mastering the basics of camera functions to exploring creative photo projects, the course provides a hands-on platform for teens to develop their photography skills and unleash their artistic vision. Join us for an inspiring journey into the captivating realm of visual storytelling and image creation!</p>', 'moviecover-41400.png', 1, '\"[null]\"', NULL, '\"[null]\"', NULL, NULL, '2023-11-23 20:57:49', '2023-11-23 20:57:49'),
(18, 'Grafik Dizajn', 'Graphic Design', '<p>Ju prezantojmë kursin për grafik dizajn i krijuar për adoleshentët e moshës 14 vjeç+.&nbsp;Në këtë program dinamik të udhëhequr nga pedagogë profesioniste, adoleshentët gërmojnë në fushën e dizajnit grafik, duke mësuar mjetet dhe teknikat thelbësore për krijimin e pamjeve vizuale dixhitale tërheqëse. Nga zotërimi i softuerit të dizajnit te eksplorimi i parimeve të paraqitjes dhe tipografisë, kursi fuqizon mendjet e reja që t\'i kthejnë idetë e tyre në art dixhital bindës. Bashkohuni me ne për një rrugëtim emocionues ku adoleshentët sjellin në jetë imagjinatën e tyre përmes fuqisë së dizajnit grafik!</p>', '<p>We present you with a graphic design course crafted for teenagers aged 14 and above. In this dynamic program led by skilled instructors, teens delve into the realm of graphic design, learning essential tools and techniques for creating eye-catching digital visuals. From mastering design software to exploring the principles of layout and typography, the course&nbsp; empowers young minds to turn their ideas into compelling digital art. Join us for an exciting journey where teens bring their imagination to life through the power of graphic design!</p>', 'moviecover-5327.png', 1, '\"[null]\"', NULL, '\"[null]\"', NULL, NULL, '2023-11-24 13:04:26', '2023-11-24 15:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `course_registers`
--

CREATE TABLE `course_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `surname` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `orari` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_registers`
--

INSERT INTO `course_registers` (`id`, `course_id`, `name`, `surname`, `email`, `phone`, `orari`, `created_at`, `updated_at`) VALUES
(2, 9, 'Igor Mays', 'Pope', 'cicini@mailinator.com', '+1 (726) 673-8754', NULL, '2023-11-17 21:27:42', '2023-11-17 21:27:42'),
(3, 9, 'Davis Sears', 'Everett', 'zuwoki@mailinator.com', '+1 (583) 197-7435', NULL, '2023-11-17 21:29:17', '2023-11-17 21:29:17'),
(4, 9, 'Cora Pope', 'Wilkerson', 'ryvemy@mailinator.com', '+1 (228) 337-8152', NULL, '2023-11-20 19:28:11', '2023-11-20 19:28:11'),
(5, 9, 'Sonya Terry', 'Russo', 'refifiniji@mailinator.com', '+1 (935) 288-4772', NULL, '2023-11-20 19:30:21', '2023-11-20 19:30:21'),
(6, 9, 'Jennifer Garza', 'Ware', 'bahuvuz@mailinator.com', '+1 (515) 494-1738', NULL, '2023-11-20 19:30:51', '2023-11-20 19:30:51'),
(7, 9, 'Allegra Petty', 'Ware', 'vavesume@mailinator.com', '+1 (828) 512-1436', NULL, '2023-11-20 19:52:12', '2023-11-20 19:52:12'),
(8, 9, 'Charissa Frye', 'Gomez', 'pusu@mailinator.com', '+1 (996) 337-4803', NULL, '2023-11-20 19:54:25', '2023-11-20 19:54:25'),
(9, 8, 'Honorato Mendez', 'Pierce', 'pibe@mailinator.com', '+1 (377) 794-1072', NULL, '2023-11-20 19:55:39', '2023-11-20 19:55:39'),
(10, 9, 'Carol Winters', 'Sharpe', 'rafofa@mailinator.com', '+1 (996) 608-4452', NULL, '2023-11-20 21:24:18', '2023-11-20 21:24:18'),
(11, 9, 'Uma Kim', 'Ortiz', 'gajihi@mailinator.com', '+1 (114) 889-9789', '15:00', '2023-11-20 21:25:18', '2023-11-20 21:25:18'),
(12, 9, 'Yen Wade', 'Foster', 'kopeciqy@mailinator.com', '+1 (288) 956-3152', '18:00', '2023-11-20 21:25:30', '2023-11-20 21:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `title_en` varchar(191) DEFAULT NULL,
  `description` text NOT NULL,
  `description_en` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `limit_number` int(11) DEFAULT NULL,
  `isBanner` tinyint(1) NOT NULL DEFAULT 0,
  `maps_url` text DEFAULT NULL,
  `data_eventit` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `isSold` tinyint(4) NOT NULL DEFAULT 0,
  `isPaid` tinyint(4) NOT NULL DEFAULT 0,
  `price` decimal(10,2) DEFAULT NULL,
  `regjia` longtext DEFAULT NULL,
  `times` longtext DEFAULT NULL,
  `days` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `title_en`, `description`, `description_en`, `image`, `limit_number`, `isBanner`, `maps_url`, `data_eventit`, `isSold`, `isPaid`, `price`, `regjia`, `times`, `days`, `created_at`, `updated_at`) VALUES
(3, 'test1', NULL, '<p>asdsa</p>', NULL, 'Group-98@2x-26137.png', 2, 0, 'asdasd', '2023-11-17 14:18:37', 0, 0, NULL, NULL, NULL, NULL, '2023-11-03 18:17:21', '2023-11-08 18:46:41'),
(4, 'test22', NULL, '<p>test</p>', NULL, 'guitar-68148.png', 2, 0, 'test', '2023-11-17 14:18:36', 1, 0, NULL, NULL, NULL, NULL, '2023-11-08 18:46:43', '2023-11-08 20:49:20'),
(6, 'test', NULL, '<p>test</p>', NULL, 'guitar-13809.png', 31, 0, 'test', '2023-11-17 14:18:29', 1, 0, NULL, '[\"test\",\"123\"]', '[\"14:00\",\"12:00\",\"16:11\"]', 'test', '2023-11-08 20:43:20', '2023-11-08 20:43:20'),
(7, 'Et nihil ut non pari', NULL, '<p>asd</p>', NULL, 'guitar-96394.png', 2, 0, 'Vel a voluptatem re', '2023-11-17 14:18:32', 0, 0, NULL, '[\"Iure hic id ipsa ut\"]', '[\"12:00\"]', 'Mon-Fri', '2023-11-08 20:49:20', '2023-11-13 20:56:02'),
(8, 'Totam nulla voluptat', NULL, '<p>asdasad</p>', NULL, 'moviecover-89372.png', 2, 0, 'https://www.google.com/maps/search/41.334987,+19.820920?entry=tts', '2023-11-17 14:18:34', 0, 1, 200.00, '[\"Incidunt sed irure\"]', '[\"12:00\",\"12:22\"]', '27', '2023-11-13 20:01:22', '2023-11-14 15:46:25'),
(10, 'Ad cillum et laborum', NULL, '<p>test</p>', NULL, 'moviecover-7796.png', 31, 1, '', '2023-11-21 13:40:25', 0, 1, 3940.00, '[\"John Doe\"]', '[\"12:00\"]', 'Mon-Fri', '2023-11-14 15:46:26', '2023-11-14 18:02:41'),
(11, 'titull al', NULL, '<p>desc al</p>', NULL, 'Group93@2x-54101.png', 22, 0, '1', '2023-11-23 17:10:00', 0, 0, NULL, '[\"john doe\"]', '[\"13:00\"]', 'Mon-Fri', '2023-11-22 17:10:01', '2023-11-22 17:10:01'),
(12, 'titull ali', 'titull eni', '<p>desc ala</p>', '<p>desc eni</p>', 'Group93@2x-4609.png', 1, 0, '1', '2023-11-22 13:11:23', 0, 0, NULL, '[\"john doe\"]', '[\"15:00\"]', 'Mon Fri', '2023-11-22 17:12:32', '2023-11-22 18:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_08_091154_create_sessions_table', 1),
(7, '2023_03_09_104209_create_roles_table', 1),
(8, '2023_03_20_113525_create_modules_table', 1),
(9, '2023_03_20_114402_create_permission_table', 1),
(10, '2023_03_20_143749_create_permission_role', 1),
(11, '2023_09_20_110601_create_contacts_table', 1),
(12, '2023_09_25_090758_create_services_table', 1),
(13, '2023_10_27_082251_create_tag_tables', 2),
(14, '2023_10_26_150652_create_blogs_table', 3),
(15, '2023_09_25_090758_create_courses_table', 4),
(16, '2023_10_31_103352_create_products_tables', 5),
(17, '2023_10_31_112504_create_events_tables', 6),
(18, '2023_11_09_095510_create_bookings_table', 7),
(19, '2023_11_09_111655_create_orders_table', 8),
(20, '2023_11_09_112425_create_order_items_table', 9),
(21, '2023_11_13_110254_create_teachers_table', 10),
(22, '2023_11_17_160837_create_course_register_table', 11),
(23, '2023_11_23_093859_create_subscribes_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Paneli', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(2, 'Rolet', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(3, 'Përdoruesit', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(4, 'Permission', '2023-10-26 10:12:29', '2023-10-26 10:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(64) NOT NULL,
  `name` varchar(191) NOT NULL,
  `surname` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `country` varchar(191) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `shipping_fee` int(11) DEFAULT NULL,
  `total_sum` decimal(10,2) DEFAULT NULL,
  `payment_type` tinyint(4) NOT NULL COMMENT '1->cash on delivery\r\n2->paypal',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `payment_id` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `payment_status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `name`, `surname`, `email`, `phone`, `address`, `city`, `country`, `zip_code`, `shipping_fee`, `total_sum`, `payment_type`, `status`, `payment_id`, `currency`, `payment_status`, `created_at`, `updated_at`) VALUES
(214, '1462469', 'Shana Lewis', 'Lowery', 'jejocawu@mailinator.com', 'kysefyhu@mailinator.com', 'Exercitationem aute', 'Durres', 'Shqiperi', 86045, 300, 3773.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:29:11', '2023-11-30 16:29:11'),
(215, '9356661', 'Shana Lewis', 'Lowery', 'jejocawu@mailinator.com', 'kysefyhu@mailinator.com', 'Exercitationem aute', 'Deçan', 'Kosove', 86045, 300, 3773.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:39:41', '2023-11-30 16:39:41'),
(216, '2490317', 'Shana Lewis', 'Lowery', 'jejocawu@mailinator.com', 'kysefyhu@mailinator.com', 'Exercitationem aute', 'Berat', 'Shqiperi', 86045, 250, 3773.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:40:44', '2023-11-30 16:40:44'),
(217, '9300030', 'Justin Gallagher', 'Macias', 'miwicelih@mailinator.com', 'sakosijynu@mailinator.com', 'Veniam obcaecati la', 'Shtime', 'Kosove', 35678, 300, 3773.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:42:07', '2023-11-30 16:42:07'),
(218, '8104705', 'Gwendolyn Velez', 'Dejesus', 'nadilenav@mailinator.com', 'byfiwev@mailinator.com', 'Sed est ut officiis', 'Vinice', 'Maqedonia', 88879, 300, 3773.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:42:31', '2023-11-30 16:42:31'),
(219, '1146213', 'Gwendolyn Velez', 'Dejesus', 'nadilenav@mailinator.com', 'byfiwev@mailinator.com', 'Sed est ut officiis', 'Vinice', 'Maqedonia', 88879, 300, 3773.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:42:34', '2023-11-30 16:42:34'),
(220, '4497152', 'Gwendolyn Velez', 'Dejesus', 'nadilenav@mailinator.com', 'byfiwev@mailinator.com', 'Sed est ut officiis', 'Vinice', 'Maqedonia', 88879, 300, 3773.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:42:35', '2023-11-30 16:42:35'),
(221, '1659156', 'Kane Mccullough', 'Miles', 'kozijipux@mailinator.com', 'hahoxene@mailinator.com', 'Sunt non rerum omnis', 'Malisheve', 'Kosove', 31147, 300, 4373.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:49:09', '2023-11-30 16:49:09'),
(222, '7215698', 'Roth Fernandez', 'Fletcher', 'riceracese@mailinator.com', 'zypoxykono@mailinator.com', 'Velit est id do al', 'Koçan', 'Maqedonia', 70301, 300, 4373.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:50:24', '2023-11-30 16:50:24'),
(223, '7154609', 'Roth Fernandez', 'Fletcher', 'riceracese@mailinator.com', 'zypoxykono@mailinator.com', 'Velit est id do al', 'Koçan', 'Maqedonia', 70301, 300, 4373.00, 2, 0, NULL, NULL, NULL, '2023-11-30 16:50:53', '2023-11-30 16:50:53'),
(224, '9471214', 'Sharon Emerson', 'Osborn', 'vapequ@mailinator.com', 'qosabivo@mailinator.com', 'Officia sunt aut di', 'Erseke', 'Shqiperi', 45206, 300, 2531.00, 2, 0, NULL, NULL, NULL, '2023-11-30 18:41:58', '2023-11-30 18:41:58'),
(225, '7196906', 'Sharon Emerson', 'Osborn', 'vapequ@mailinator.com', 'qosabivo@mailinator.com', 'Officia sunt aut di', 'Erseke', 'Shqiperi', 45206, 300, 2531.00, 2, 0, NULL, NULL, NULL, '2023-11-30 18:42:38', '2023-11-30 18:42:38'),
(226, '3100290', 'Angelica Copeland', 'Chapman', 'mulorakagi@mailinator.com', 'cire@mailinator.com', 'Repellendus Excepte', 'Istog', 'Kosove', 85318, 300, 2531.00, 2, 0, NULL, NULL, NULL, '2023-11-30 18:50:24', '2023-11-30 18:50:24'),
(227, '3877970', 'Acton Adkins', 'Battle', 'pihiqaw@mailinator.com', 'zukyfugel@mailinator.com', 'Rem sed ipsum offic', 'Patos', 'Shqiperi', 42419, 300, 2531.00, 2, 0, NULL, NULL, NULL, '2023-11-30 18:51:13', '2023-11-30 18:51:13'),
(228, '3524121', 'Acton Adkins', 'Battle', 'pihiqaw@mailinator.com', 'zukyfugel@mailinator.com', 'Rem sed ipsum offic', 'Kline', 'Kosove', 42419, 300, 2531.00, 2, 0, NULL, NULL, NULL, '2023-11-30 18:51:50', '2023-11-30 18:51:50'),
(229, '7344890', 'Perry Mann', 'Hess', 'kusururi@mailinator.com', 'qodehipi@mailinator.com', 'Velit sit laboriosa', 'Shtermeni', 'Shqiperi', 51700, 300, 2531.00, 2, 0, NULL, NULL, NULL, '2023-11-30 18:52:14', '2023-11-30 18:52:14'),
(230, '5186125', 'Abra Watkins', 'Cardenas', 'kazaqip@mailinator.com', 'hufev@mailinator.com', 'Molestiae beatae tem', 'Tepelene', 'Shqiperi', 61872, 300, 2531.00, 2, 0, NULL, NULL, NULL, '2023-11-30 18:52:52', '2023-11-30 18:52:52'),
(231, '6735461', 'Chelsea Austin', 'Dodson', 'hobogugyx@mailinator.com', 'tusedemux@mailinator.com', 'Exercitationem repud', 'Manastir', 'Maqedonia', 24182, 300, 2531.00, 2, 0, '0LX66036U54949937', NULL, 'completed', '2023-11-30 18:55:19', '2023-11-30 18:55:27'),
(232, '9425967', 'Amethyst Collier', 'Lucas', 'wufynapus@mailinator.com', 'seju@mailinator.com', 'Quo est iure sapien', 'Vushtrri', 'Kosove', 74454, 300, 2531.00, 2, 0, '56U64837GE445024P', NULL, 'completed', '2023-11-30 19:00:04', '2023-11-30 19:00:12'),
(233, '3884591', 'Murphy Golden', 'George', 'niqofebo@mailinator.com', 'tiqolovu@mailinator.com', 'Non laborum Quis ve', 'Deçan', 'Kosove', 47247, 300, 2531.00, 2, 0, '1B815819U7253644L', NULL, 'completed', '2023-11-30 19:02:48', '2023-11-30 19:02:57'),
(234, '8948551', 'Dolan Hernandez', 'Daniels', 'veqifirit@mailinator.com', 'kowidoja@mailinator.com', 'Dolore et voluptate', 'Radovisht', 'Maqedonia', 37735, 300, 2531.00, 2, 0, '3AX43935HY797283J', NULL, 'completed', '2023-11-30 19:04:05', '2023-11-30 19:04:13'),
(235, '4439724', 'Lacota Simpson', 'Baker', 'fuvixa@mailinator.com', 'revi@mailinator.com', 'Inventore consequunt', 'Manastir', 'Maqedonia', 10609, 300, 2531.00, 2, 0, '9YN77455U9730351U', NULL, 'completed', '2023-11-30 19:05:22', '2023-11-30 19:05:30'),
(236, '2673160', 'Otto Olsen', 'Green', 'kixasap@mailinator.com', 'nuse@mailinator.com', 'Nesciunt illo quae', 'Finiq', 'Shqiperi', 22413, 300, 2531.00, 1, 0, NULL, NULL, NULL, '2023-11-30 19:10:22', '2023-11-30 19:10:22'),
(237, '3064041', 'Zorita Ray', 'Schroeder', 'zihaxeqeh@mailinator.com', 'fipodojide@mailinator.com', 'Voluptas est quasi a', 'Negotine', 'Maqedonia', 58076, 300, 2531.00, 2, 0, '4LC84937HL306514X', NULL, 'completed', '2023-11-30 19:10:34', '2023-11-30 19:10:42'),
(238, '1701893', 'Dawn Espinoza', 'Nunez', 'ryhav@mailinator.com', 'wemykoc@mailinator.com', 'Et consequuntur sint', 'Brod', 'Maqedonia', 29085, 300, 2531.00, 1, 0, NULL, NULL, NULL, '2023-11-30 19:15:10', '2023-11-30 19:15:10'),
(239, '7507831', 'Karyn Whitfield', 'Walls', 'zuvapugije@mailinator.com', 'kyluqaje@mailinator.com', 'Fugiat ullamco omni', 'Hani i Elezit', 'Kosove', 69821, 300, 2531.00, 1, 0, NULL, NULL, NULL, '2023-11-30 19:19:33', '2023-11-30 19:19:33'),
(240, '9949240', 'Farrah Buchanan', 'Hobbs', 'rolo@mailinator.com', 'dywysi@mailinator.com', 'Id aute non voluptat', 'Bulqize', 'Shqiperi', 69562, 300, 2531.00, 2, 0, '0EG14253U59084428', NULL, 'completed', '2023-11-30 19:19:45', '2023-11-30 19:19:53'),
(241, '1590509', 'TaShya Mclaughlin', 'Elliott', 'fejukoco@mailinator.com', 'luvuvawa@mailinator.com', 'Qui enim id temporib', 'Burrel', 'Shqiperi', 83879, 300, 2531.00, 2, 0, '88X31446AN767184D', NULL, 'completed', '2023-11-30 19:22:26', '2023-11-30 19:22:37'),
(242, '4399220', 'Inez Bartlett', 'Howell', 'kyvohup@mailinator.com', 'pycuqokuta@mailinator.com', 'Autem optio volupta', 'Krusheve', 'Maqedonia', 14426, 300, 2531.00, 1, 0, NULL, NULL, NULL, '2023-11-30 19:25:42', '2023-11-30 19:25:42'),
(243, '6044307', 'Kaye Goodman', 'Parsons', 'sabohafy@mailinator.com', 'pojutuv@mailinator.com', 'Aliquam libero incid', 'Veles', 'Maqedonia', 22838, 300, 2531.00, 2, 0, '7GL031906K765802K', NULL, 'completed', '2023-11-30 19:25:56', '2023-11-30 19:26:03'),
(244, '7700510', 'Ursula Hull', 'Grant', 'radin@mailinator.com', 'pemuj@mailinator.com', 'Voluptate natus beat', 'Erseke', 'Shqiperi', 62909, 300, 2531.00, 2, 0, '3D691789UF8023138', NULL, 'completed', '2023-11-30 19:36:55', '2023-11-30 19:37:04'),
(245, '8766695', 'Iris Sweeney', 'Morgan', 'kuqipukugi@mailinator.com', 'vyhy@mailinator.com', 'Omnis dolor consequa', 'Graçanice', 'Kosove', 17658, 300, 3345.00, 1, 0, NULL, NULL, NULL, '2023-11-30 19:49:55', '2023-11-30 19:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` varchar(191) DEFAULT NULL,
  `size` varchar(191) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `color`, `size`, `price`, `created_at`, `updated_at`) VALUES
(317, 245, 3, 1, NULL, NULL, 2231, '2023-11-30 19:49:55', '2023-11-30 19:49:55'),
(316, 245, 8, 1, NULL, NULL, 514, '2023-11-30 19:49:55', '2023-11-30 19:49:55'),
(315, 244, 3, 1, NULL, NULL, 2231, '2023-11-30 19:36:55', '2023-11-30 19:36:55'),
(314, 243, 3, 1, NULL, NULL, 2231, '2023-11-30 19:25:56', '2023-11-30 19:25:56'),
(313, 242, 3, 1, NULL, NULL, 2231, '2023-11-30 19:25:42', '2023-11-30 19:25:42'),
(312, 241, 3, 1, NULL, NULL, 2231, '2023-11-30 19:22:26', '2023-11-30 19:22:26'),
(311, 240, 3, 1, NULL, NULL, 2231, '2023-11-30 19:19:45', '2023-11-30 19:19:45'),
(310, 239, 3, 1, NULL, NULL, 2231, '2023-11-30 19:19:33', '2023-11-30 19:19:33'),
(309, 238, 3, 1, NULL, NULL, 2231, '2023-11-30 19:15:10', '2023-11-30 19:15:10'),
(308, 237, 3, 1, NULL, NULL, 2231, '2023-11-30 19:10:34', '2023-11-30 19:10:34'),
(307, 236, 3, 1, NULL, NULL, 2231, '2023-11-30 19:10:22', '2023-11-30 19:10:22'),
(306, 235, 3, 1, NULL, NULL, 2231, '2023-11-30 19:05:22', '2023-11-30 19:05:22'),
(305, 234, 3, 1, NULL, NULL, 2231, '2023-11-30 19:04:05', '2023-11-30 19:04:05'),
(304, 233, 3, 1, NULL, NULL, 2231, '2023-11-30 19:02:48', '2023-11-30 19:02:48'),
(303, 232, 3, 1, NULL, NULL, 2231, '2023-11-30 19:00:04', '2023-11-30 19:00:04'),
(302, 231, 3, 1, NULL, NULL, 2231, '2023-11-30 18:55:19', '2023-11-30 18:55:19'),
(301, 230, 3, 1, NULL, NULL, 2231, '2023-11-30 18:52:52', '2023-11-30 18:52:52'),
(300, 229, 3, 1, NULL, NULL, 2231, '2023-11-30 18:52:14', '2023-11-30 18:52:14'),
(299, 228, 3, 1, NULL, NULL, 2231, '2023-11-30 18:51:50', '2023-11-30 18:51:50'),
(298, 227, 3, 1, NULL, NULL, 2231, '2023-11-30 18:51:13', '2023-11-30 18:51:13'),
(297, 226, 3, 1, NULL, NULL, 2231, '2023-11-30 18:50:24', '2023-11-30 18:50:24'),
(296, 225, 3, 1, NULL, NULL, 2231, '2023-11-30 18:42:38', '2023-11-30 18:42:38'),
(295, 224, 3, 1, NULL, NULL, 2231, '2023-11-30 18:41:58', '2023-11-30 18:41:58'),
(294, 223, 3, 1, NULL, NULL, 2231, '2023-11-30 16:50:53', '2023-11-30 16:50:53'),
(293, 223, 8, 3, NULL, NULL, 514, '2023-11-30 16:50:53', '2023-11-30 16:50:53'),
(292, 222, 3, 1, NULL, NULL, 2231, '2023-11-30 16:50:24', '2023-11-30 16:50:24'),
(291, 222, 8, 3, NULL, NULL, 514, '2023-11-30 16:50:24', '2023-11-30 16:50:24'),
(290, 221, 3, 1, NULL, NULL, 2231, '2023-11-30 16:49:09', '2023-11-30 16:49:09'),
(289, 221, 8, 3, NULL, NULL, 514, '2023-11-30 16:49:09', '2023-11-30 16:49:09'),
(288, 220, 3, 1, NULL, NULL, 2231, '2023-11-30 16:42:35', '2023-11-30 16:42:35'),
(287, 220, 8, 3, NULL, NULL, 514, '2023-11-30 16:42:35', '2023-11-30 16:42:35'),
(286, 219, 3, 1, NULL, NULL, 2231, '2023-11-30 16:42:34', '2023-11-30 16:42:34'),
(285, 219, 8, 3, NULL, NULL, 514, '2023-11-30 16:42:34', '2023-11-30 16:42:34'),
(284, 218, 3, 1, NULL, NULL, 2231, '2023-11-30 16:42:31', '2023-11-30 16:42:31'),
(283, 218, 8, 3, NULL, NULL, 514, '2023-11-30 16:42:31', '2023-11-30 16:42:31'),
(282, 217, 3, 1, NULL, NULL, 2231, '2023-11-30 16:42:07', '2023-11-30 16:42:07'),
(281, 217, 8, 3, NULL, NULL, 514, '2023-11-30 16:42:07', '2023-11-30 16:42:07'),
(280, 216, 3, 1, NULL, NULL, 2231, '2023-11-30 16:40:44', '2023-11-30 16:40:44'),
(279, 216, 8, 3, NULL, NULL, 514, '2023-11-30 16:40:44', '2023-11-30 16:40:44'),
(278, 215, 3, 1, NULL, NULL, 2231, '2023-11-30 16:39:41', '2023-11-30 16:39:41'),
(277, 215, 8, 3, NULL, NULL, 514, '2023-11-30 16:39:41', '2023-11-30 16:39:41'),
(276, 214, 3, 1, NULL, NULL, 2231, '2023-11-30 16:29:11', '2023-11-30 16:29:11'),
(275, 214, 8, 3, NULL, NULL, 514, '2023-11-30 16:29:11', '2023-11-30 16:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `module_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Paneli', 'app.dashboard', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(2, 2, 'Lista', 'app.roles.index', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(3, 2, 'Krijimi', 'app.roles.create', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(4, 2, 'Ruajtja', 'app.roles.store', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(5, 2, 'Editimi', 'app.roles.edit', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(6, 2, 'Fshirja', 'app.roles.destroy', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(7, 3, 'Lista', 'app.users.index', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(8, 3, 'Krijimi', 'app.users.create', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(9, 3, 'Ruajtja', 'app.users.store', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(10, 3, 'Editimi', 'app.users.edit', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(11, 3, 'Fshirja', 'app.users.destroy', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(12, 4, 'Lista', 'app.permissions.index', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(13, 4, 'Krijimi', 'app.permissions.create', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(14, 4, 'Ruajtja', 'app.permissions.store', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(15, 4, 'Editimi', 'app.permissions.edit', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(16, 4, 'Fshirja', 'app.permissions.destroy', '2023-10-26 10:12:29', '2023-10-26 10:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 1, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 11, 1, NULL, NULL),
(12, 12, 1, NULL, NULL),
(13, 13, 1, NULL, NULL),
(14, 14, 1, NULL, NULL),
(15, 15, 1, NULL, NULL),
(16, 16, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `thumbnail` text NOT NULL,
  `images` text DEFAULT NULL,
  `description` text NOT NULL,
  `sizes` varchar(191) DEFAULT NULL,
  `colors` varchar(191) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `thumbnail`, `images`, `description`, `sizes`, `colors`, `price`, `created_at`, `updated_at`) VALUES
(3, 'test', 'test', 'Rectangle69@2x-20143.png', '[\"Rectangle71@2x-76282.png\"]', '<p>test desc</p>', NULL, NULL, 2231.00, '2023-10-31 14:15:46', '2023-11-21 20:26:15'),
(8, 'test3', 'test3', 'Rectangle71@2x-85659.png', '[\"Rectangle71@2x-7842.png\",\"Rectangle70@2x-85489.png\",\"Rectangle69@2x-2576.png\",\"Group93@2x-54204.png\"]', '<p>test desc</p>', '\"[\\\"S\\\"]\"', '\"[\\\"Blu\\\"]\"', 514.00, '2023-11-01 08:45:45', '2023-11-21 20:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(2, 'Admin', 'admin', '2023-10-26 10:12:29', '2023-10-26 10:12:29'),
(3, 'manager', 'manager', '2023-10-26 10:12:29', '2023-10-26 10:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'asd@mail.com', '2023-11-23 15:54:03', '2023-11-23 15:54:03'),
(2, 'asd@mail.com', '2023-11-23 16:14:35', '2023-11-23 16:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `taggable_type` varchar(191) NOT NULL,
  `taggable_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`tag_id`, `taggable_type`, `taggable_id`) VALUES
(10, 'App\\Models\\Blog', 4),
(10, 'App\\Models\\Blog', 6),
(11, 'App\\Models\\Blog', 4),
(12, 'App\\Models\\Blog', 4),
(13, 'App\\Models\\Blog', 4),
(13, 'App\\Models\\Blog', 5),
(13, 'App\\Models\\Blog', 6),
(14, 'App\\Models\\Blog', 5),
(15, 'App\\Models\\Blog', 6),
(15, 'App\\Models\\Blog', 7),
(16, 'App\\Models\\Blog', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`name`)),
  `slug` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`slug`)),
  `type` varchar(191) DEFAULT NULL,
  `order_column` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `type`, `order_column`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"asd\"}', '{\"en\":\"asd\"}', NULL, 1, '2023-10-27 07:03:34', '2023-10-27 07:03:34'),
(2, '{\"en\":\"asdasd\"}', '{\"en\":\"asdasd\"}', NULL, 2, '2023-10-27 07:03:34', '2023-10-27 07:03:34'),
(3, '{\"en\":\"s\"}', '{\"en\":\"s\"}', NULL, 3, '2023-10-27 07:03:34', '2023-10-27 07:03:34'),
(4, '{\"en\":\"dssd\"}', '{\"en\":\"dssd\"}', NULL, 4, '2023-10-27 07:03:34', '2023-10-27 07:03:34'),
(5, '{\"en\":\"123\"}', '{\"en\":\"123\"}', NULL, 5, '2023-10-27 07:36:33', '2023-10-27 07:36:33'),
(6, '{\"en\":\"22\"}', '{\"en\":\"22\"}', NULL, 6, '2023-10-27 07:36:33', '2023-10-27 07:36:33'),
(7, '{\"en\":\"dsss\"}', '{\"en\":\"dsss\"}', NULL, 7, '2023-10-27 07:38:19', '2023-10-27 07:38:19'),
(8, '{\"en\":\"Error dignissimos et\"}', '{\"en\":\"error-dignissimos-et\"}', NULL, 8, '2023-11-22 15:12:10', '2023-11-22 15:12:10'),
(9, '{\"sq\":\"Error dignissimos et\"}', '{\"sq\":\"error-dignissimos-et\"}', NULL, 9, '2023-11-22 17:05:32', '2023-11-22 17:05:32'),
(10, '{\"sq\":\"art\"}', '{\"sq\":\"art\"}', NULL, 10, '2023-11-27 16:54:48', '2023-11-27 16:54:48'),
(11, '{\"sq\":\"zhvillim\"}', '{\"sq\":\"zhvillim\"}', NULL, 11, '2023-11-27 16:54:48', '2023-11-27 16:54:48'),
(12, '{\"sq\":\"kurs\"}', '{\"sq\":\"kurs\"}', NULL, 12, '2023-11-27 16:54:48', '2023-11-27 16:54:48'),
(13, '{\"sq\":\"femije\"}', '{\"sq\":\"femije\"}', NULL, 13, '2023-11-27 16:54:48', '2023-11-27 16:54:48'),
(14, '{\"sq\":\"kercim\"}', '{\"sq\":\"kercim\"}', NULL, 14, '2023-11-27 18:07:53', '2023-11-27 18:07:53'),
(15, '{\"sq\":\"kurse\"}', '{\"sq\":\"kurse\"}', NULL, 15, '2023-11-27 18:11:56', '2023-11-27 18:11:56'),
(16, '{\"sq\":\"arte\"}', '{\"sq\":\"arte\"}', NULL, 16, '2023-11-27 18:14:15', '2023-11-27 18:14:15'),
(17, '{\"sq\":\"Officia qui eos qui\",\"en\":\"Officia qui eos qui\"}', '{\"sq\":\"officia-qui-eos-qui\",\"en\":\"officia-qui-eos-qui\"}', NULL, 17, '2023-11-27 20:52:45', '2023-11-27 21:21:11'),
(18, '{\"sq\":\"asda\",\"en\":\"asda\"}', '{\"sq\":\"asda\",\"en\":\"asda\"}', NULL, 18, '2023-11-27 20:52:45', '2023-11-27 21:21:11'),
(19, '{\"sq\":\"sss\",\"en\":\"sss\"}', '{\"sq\":\"sss\",\"en\":\"sss\"}', NULL, 19, '2023-11-27 20:52:45', '2023-11-27 21:21:11'),
(20, '{\"sq\":\"asd\",\"en\":\"asd\"}', '{\"sq\":\"asd\",\"en\":\"asd\"}', NULL, 20, '2023-11-27 21:21:11', '2023-11-27 21:21:11'),
(21, '{\"sq\":\"Est quia dignissimo\",\"en\":\"Est quia dignissimo\"}', '{\"sq\":\"est-quia-dignissimo\",\"en\":\"est-quia-dignissimo\"}', NULL, 21, '2023-11-27 21:22:21', '2023-11-27 21:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `surname` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `surname`, `status`, `created_at`, `updated_at`) VALUES
(4, 'test1', 'test', 0, '2023-11-13 18:55:09', '2023-11-13 18:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `role` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `business_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL DEFAULT 1,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `business_id`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `added_by`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'admin@admin.com', 1, NULL, NULL, '$2y$10$GLXzais.IqvniblgdF0rZOUe0JeRBsiRbgzalRpcg.W6uwDV4m6bO', NULL, NULL, NULL, 1, '1', NULL, NULL, NULL, '2023-10-26 10:12:29', '2023-10-26 10:12:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_event_id_foreign` (`event_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_registers`
--
ALTER TABLE `course_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modules_name_unique` (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_code_unique` (`order_code`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`),
  ADD KEY `permissions_module_id_foreign` (`module_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD UNIQUE KEY `taggables_tag_id_taggable_id_taggable_type_unique` (`tag_id`,`taggable_id`,`taggable_type`),
  ADD KEY `taggables_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `course_registers`
--
ALTER TABLE `course_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `taggables`
--
ALTER TABLE `taggables`
  ADD CONSTRAINT `taggables_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
