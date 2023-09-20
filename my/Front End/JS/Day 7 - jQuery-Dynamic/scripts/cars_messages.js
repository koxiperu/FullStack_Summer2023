const messagesArray = [
    {
        sender :'Thomas Johnson',
        lastMessage :'Hello, man. Give me $120, please. Cat gives birth...' ,
        date : '5 min ago',
        notSeen :1,
        picture : 'images/contacts/contact1.png'
    },
    {
        sender :'Steve Bruski',
        lastMessage :'Thanks. I really helped out. I\'ll give it the day after tom...' ,
        date : 'Today, at 10:00',
        notSeen :1,
        picture : 'images/contacts/contact2.png'
    },
    {
        sender :'Anastasia Markus',
        lastMessage :'Return at least once in time 😈' ,
        date : 'Yesterday, at 14:02',
        picture : 'images/contacts/contact3.png'
    },
    {
        sender :'Anastasia Markus',
        lastMessage :'No, don’t ask me for a loan anymore. The freebie is over ✋' ,
        date : 'Yesterday, at 13:45',
        picture : 'images/contacts/contact4.png'
    },
    {
        sender :'e Banco',
        lastMessage :'Dear users, today at 00:00 the service will be unavaila...' ,
        date : '20 Dec, at 09:00',
    },
];
//make the clone
const mesTempl=$("#messageBox");
for (const oneMes of messagesArray){
    const mesClone=mesTempl.clone();
    //take values
    const mesPic=oneMes.picture;
    const mesName=oneMes.sender;
    const mesMes=oneMes.lastMessage;
    const mesNoRead=oneMes.notSeen>0;
    const mesDate=oneMes.date;
    console.log(mesNoRead);
    $("main").append(mesClone);
    mesClone.find("#photo").attr("src", mesPic);
    mesClone.find("#name").text(mesName);    
    mesClone.find("#date").text(mesDate);
    mesClone.find("#message").text(mesMes);
    if (mesNoRead) {
        mesClone.find("#unread").text("1");
        mesClone.find("#unread").css({
            "background-color":"rgb(247, 128, 201)"
        })             
    }    
}
mesTempl.remove();