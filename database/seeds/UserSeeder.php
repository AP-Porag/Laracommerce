<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'S. Asraf porag',
            'email'=>'asraf@aic.mail.com',
            'username'=>'asrafporag',
            'phone'=>'01828963235',
            'role'=>'admin',
            'password'=>bcrypt('asraf@aic.mail.com'),
            'avatar'=>'https://cdn.quasar.dev/img/boy-avatar.png'
        ]);
        User::create([
            'name'=>'Konika Asraf',
            'email'=>'konika@aic.mail.com',
            'username'=>'konikaasraf',
            'phone'=>'01828963234',
            'role'=>'vendor',
            'password'=>bcrypt('konika@aic.mail.com'),
            'avatar'=>'https://cdn.quasar.dev/img/avatar2.jpg'
        ]);
        User::create([
            'name'=>'Irene Alsop',
            'email'=>'irene.alsop@gmail.com',
            'username'=>'irenealsop',
            'phone'=>'01828965354',
            'role'=>'customer',
            'password'=>bcrypt('irene.alsop@gmail.com'),
            'avatar'=>'https://cdn.quasar.dev/img/avatar1.jpg'
        ]);
        User::create([
            'name'=>'Hart Hudson',
            'email'=>'hhudson0@list-manage.com',
            'username'=>'hhudson0',
            'phone'=>'6987190729',
            'role'=>'customer',
            'password'=>bcrypt('hhudson0@list-manage.com'),
            'avatar'=>'https://cdn.quasar.dev/img/avatar4.jpg'
        ]);
        User::create([
            'name'=>'Melanie Gladbach',
            'email'=>'mgladbach1@storify.com',
            'username'=>'mgladbach1',
            'phone'=>'6105285148',
            'role'=>'customer',
            'password'=>bcrypt('mgladbach1@storify.com'),
            'avatar'=>'https://cdn.quasar.dev/img/avatar3.jpg'
        ]);
        User::create([
            'name'=>'Stillman Collins',
            'email'=>'scollins2@howstuffworks.com',
            'username'=>'scollins2',
            'phone'=>'2347338087',
            'role'=>'customer',
            'password'=>bcrypt('scollins2@howstuffworks.com'),
            'avatar'=>'https://cdn.quasar.dev/img/avatar.png'
        ]);
        User::create([
            'name'=>'Janeva Hoyle',
            'email'=>'jhoyle0@fastcompany.com',
            'username'=>'jhoyle0',
            'phone'=>'7048138850',
            'role'=>'customer',
            'password'=>bcrypt('jhoyle0@fastcompany.com'),
            "avatar"=> "https://robohash.org/utexplicabofacilis.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Clerkclaude Broadnicke',
            'email'=>'cbroadnicke1@lycos.com',
            'username'=>'cbroadnicke1',
            'phone'=>'9016780674',
            'role'=>'customer',
            'password'=>bcrypt('cbroadnicke1@lycos.com'),
            "avatar"=> "https://robohash.org/sequilaborumrerum.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Salvador Sazio',
            'email'=>'ssazio2@phoca.cz',
            'username'=>'ssazio2',
            'phone'=>'3019064373',
            'role'=>'customer',
            'password'=>bcrypt('ssazio2@phoca.cz'),
            "avatar"=> "https://robohash.org/nostrumculpain.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Ralina Hagley',
            'email'=>'rhagley3@canalblog.com',
            'username'=>'rhagley3',
            'phone'=>'6148435485',
            'role'=>'customer',
            'password'=>bcrypt('rhagley3@canalblog.com'),
            "avatar"=> "https://robohash.org/autfacereaut.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Nicholle Owen',
            'email'=>'nowen4@youku.com',
            'username'=>'nowen4',
            'phone'=>'9824033518',
            'role'=>'customer',
            'password'=>bcrypt('nowen4@youku.com'),
            "avatar"=> "https://robohash.org/cumpraesentiumiste.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Celestina Apark',
            'email'=>'capark5@tmall.com',
            'username'=>'capark5',
            'phone'=>'7245550681',
            'role'=>'customer',
            'password'=>bcrypt('capark5@tmall.com'),
            "avatar"=> "https://robohash.org/suscipitinciduntreiciendis.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Cornela Rignall',
            'email'=>'crignall6@ustream.tv',
            'username'=>'crignall6',
            'phone'=>'3249145531',
            'role'=>'customer',
            'password'=>bcrypt('crignall6@ustream.tv'),
            "avatar"=> "https://robohash.org/magnamestodit.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Helga Karolovsky',
            'email'=>'hkarolovsky7@zdnet.com',
            'username'=>'hkarolovsky7',
            'phone'=>'8679701350',
            'role'=>'customer',
            'password'=>bcrypt('hkarolovsky7@zdnet.com'),
            "avatar"=> "https://robohash.org/aliasutfugit.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Camala Handy',
            'email'=>'chandy8@cnbc.com',
            'username'=>'chandy8',
            'phone'=>'7457218243',
            'role'=>'customer',
            'password'=>bcrypt('chandy8@cnbc.com'),
            "avatar"=> "https://robohash.org/quisconsequaturnam.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Elenore Crombleholme',
            'email'=>'ecrombleholme9@cisco.com',
            'username'=>'ecrombleholme9',
            'phone'=>'3855067272',
            'role'=>'customer',
            'password'=>bcrypt('ecrombleholme9@cisco.com'),
            "avatar"=> "https://robohash.org/voluptatibusaaut.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Humphrey Esslement',
            'email'=>'hesslementa@studiopress.com',
            'username'=>'hesslementa',
            'phone'=>'9719430719',
            'role'=>'customer',
            'password'=>bcrypt('hesslementa@studiopress.com'),
            "avatar"=> "https://robohash.org/quasiquaeratipsum.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Constantin Braunfeld',
            'email'=>'cbraunfeldb@1und1.de',
            'username'=>'cbraunfeldb',
            'phone'=>'9613240897',
            'role'=>'customer',
            'password'=>bcrypt('cbraunfeldb@1und1.de'),
            "avatar"=> "https://robohash.org/doloremqueexercitationemodit.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Janeva Scadding',
            'email'=>'jscaddingc@uol.com.br',
            'username'=>'jscaddingc',
            'phone'=>'1255356831',
            'role'=>'customer',
            'password'=>bcrypt('jscaddingc@uol.com.br'),
            "avatar"=> "https://robohash.org/repudiandaedoloresplaceat.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Felicle Moir',
            'email'=>'fmoird@dyndns.org',
            'username'=>'fmoird',
            'phone'=>'4526522510',
            'role'=>'customer',
            'password'=>bcrypt('fmoird@dyndns.org'),
            "avatar"=> "https://robohash.org/laboresimiliquererum.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Sula Kalinowsky',
            'email'=>'skalinowskye@reference.com',
            'username'=>'skalinowskye',
            'phone'=>'2618722337',
            'role'=>'customer',
            'password'=>bcrypt('skalinowskye@reference.com'),
            "avatar"=> "https://robohash.org/debitispariaturlaudantium.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Abbe Brevetor',
            'email'=>'abrevetorf@themeforest.net',
            'username'=>'abrevetorf',
            'phone'=>'3386281532',
            'role'=>'customer',
            'password'=>bcrypt('skalinowskye@reference.com'),
            "avatar"=> "https://robohash.org/doloremsintdolorem.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Emylee Burnsell',
            'email'=>'eburnsellg@elpais.com',
            'username'=>'eburnsellg',
            'phone'=>'258-208-0183',
            'role'=>'customer',
            'password'=>bcrypt('eburnsellg@elpais.com'),
            "avatar"=> "https://robohash.org/idquisquamsaepe.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Rorie Vidgeon',
            'email'=>'rvidgeonh@europa.eu',
            'username'=>'rvidgeonh',
            'phone'=>'668-298-8870',
            'role'=>'customer',
            'password'=>bcrypt('rvidgeonh@europa.eu'),
            "avatar"=> "https://robohash.org/iureoptioharum.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Andrus Rielly',
            'email'=>'ariellyi@sfgate.com',
            'username'=>'ariellyi',
            'phone'=>'339-475-9953',
            'role'=>'customer',
            'password'=>bcrypt('ariellyi@sfgate.com'),
            "avatar"=> "https://robohash.org/rerumquiaut.png?size=50x50&set=set1"
        ]);
        User::create([
            'name'=>'Van Binny',
            'email'=>'vbinnyj@shutterfly.com',
            'username'=>'vbinnyj',
            'phone'=>'286-875-5940',
            'role'=>'customer',
            'password'=>bcrypt('vbinnyj@shutterfly.com'),
            "avatar"=> "https://robohash.org/quaeratautvitae.png?size=50x50&set=set1"
        ]);
    }
}
