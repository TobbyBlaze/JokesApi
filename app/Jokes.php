<?php

namespace App;

class Jokes
{
	protected $jokes = [

        // Parade funny clean jokes
		'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
		'Chuck Norris counted to infinity... Twice.',
		'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
        'There’s a fine line between a numerator and a denominator. (…Only a fraction of people will get this clean joke.)',
        'What do dentists call their x-rays?  Tooth pics!',
        'Did you hear about the first restaurant to open on the moon?   It had great food, but no atmosphere.',
        'What did one ocean say to the other ocean?    Nothing, it just waved.',
        'Do you want to hear a construction joke?      Sorry, I’m still working on it.',
        'Did you hear about the fire at the circus?    It was in tents!',
        'Why do ducks have feathers?    To cover their butt quacks!',
        'What’s the difference between a hippo and a zippo?    One is really heavy and the other\'s a little lighter.',
        'What does a nosey pepper do?   It gets jalapeño business.',
        'Why should you never trust stairs?    They’re always up to something.',
        'When does a joke become a ‘dad’ joke?     When it becomes apparent.',
        'Why did the bullet end up losing his job?     He got fired.',
        'What kind of shorts do clouds wear?    Thunderpants',
        'I entered ten puns in a contest to see which would win.    No pun in ten did.',
        'How do you measure a snake?    In inches—they don’t have feet.',
        'Where does a waitress with only one leg work?     IHOP.',
        'What does a house wear?    Address!',
        'Why are toilets always so good at poker?   They always get a flush',
        'Why is Peter Pan always flying?    Because he Neverlands. (I love this joke because it never grows old.)',
        'You heard the rumor going around about butter?     Never mind, I shouldn’t spread it.',
        'Two windmills are standing on a wind farm. One asks, ‘What’s your favorite kind of music?’     The other replies, ‘I’m a big metal fan.’',
        'The first rule of the Alzheimer’s club is…     Wait, where are we again?',
        'I took the shell off of my racing snail, thinking it would make him faster.    But if anything, it made him more sluggish.',
        'What do you get from a pampered cow?   Spoiled milk.',
        'How does NASA organize a party?    They planet.',
        'What’s the best thing about Switzerland?   I don’t know, but the flag is a big plus.',
        'You know, it was so cold in D.C. the other day, I saw a politician with his hands in his own pockets.',
        'How many tickles does it take to get an octopus to laugh?     Ten tickles',
        'Why doesn’t Dracula have any friends?     Well, honestly, he’s a real pain in the neck.',
        'My teachers told me I’d never amount to much since I procrastinate so much.    I told them, “Just you wait!”',
        'Why were they called the “dark ages?”     Because there were a lot of knights.',
        'What gets wetter the more it dries?    A towel.',
        'Why aren’t koalas considered bears?    They don’t have the right koala-fications.',
        'Want to hear a joke about a roof?     The first one’s on the house.',
        'What’s a pirate’s favorite letter?     You probably think it’s “R” but it be the “C”.',
        'How much teddy bears never want to eat anything?   Because they’re always stuffed.',
        'Did you hear about the cheese factory that exploded in France?     There was nothing left but de Brie.',
        'Where should you go in the room if you’re feeling cold?    The corner—they’re usually 90 degrees.',
        'I can never take my dog to the park because the ducks keep trying to bite him.     I guess that’s what I get for buying a pure bread dog.',
        'What’s the difference between a poorly dressed man on a unicycle and a well-dressed man on a bicycle?     Attire.',
        'What did the Buddhist ask the hot dog vendor?     “Make me one with everything.”',
        'You know why you never see elephants hiding up in trees?      Because they’re really good at it.',
        'A horse walks into a bar.     The bartender says, “Why the long face?”',
        'How did the hipster burn his mouth?    He ate his pizza before it was cool.',
        'What do you get when you cross a dyslexic, an insomniac, and an agnostic?     Someone who lays awake at night wondering if there’s a dog.',
        'As a scarecrow, people say I’m outstanding in my field.    But hay, it’s in my jeans.',
        'Why don’t blind people skydive?    Because it scares their dogs.',
        'What’s the difference between an oral thermometer and a rectal thermometer?    The taste, mostly.',
        'I stayed up all night and tried to figure out where the sun was.   Then it dawned on me.',
        'I told my friend ten jokes to make him laugh.     Sadly, no pun in ten did.',
        'I couldn’t believe the highway department called my dad a thief.      But when I got home, the signs were all there.',
        'Why did the cowboy get a wiener dog?      He wanted to get a long little doggie.',
        'Can a kangaroo jump higher than the Empire State Building?     Of course! The Empire State Building can’t jump.',
        'What did the duck say when it bought some lipstick?    “Put it on my bill.”',
        'I googled “Rorshach test.”     But for some reason, all that came up were pictures of my parents fighting.',
        'I tried to win a suntanning competition.     But all I got was bronze.',
        'How much space will be freed in the EU after Brexit?     Approximately 1 GB.',
        'Why don’t seagulls fly over the bay?   Because then they’d be bagels.',
        'What do you call malware on a Kindle?     A bookworm.',
        'Did you hear about the painter who was hospitalized?     The doctors say it was due to too many strokes.',
        'Why are crabs so bad at sharing?   Because they’re all shellfish.',
        'What did the tie say to the hat?   You go on ahead. I’ll hang around.',
        'How do you make a tissue dance?    Put a little boogie in it.',
        'What do you call a cow with a twitch?    Beef jerky.',
        'I started a new job as a tailor last week.     It’s been sew-sew.',
        'What concert only costs 45 cents?    50 Cent featuring Nickleback.',
        'What kind of shoes does a spy wear?    Sneakers.',
        'I’ve been trying to make a sarcastic club, but it’s been really hard to tell if people are interested in joining or not.',
        'And the Lord said unto John, “Come forth and you will receive eternal life.”     But John came fifth and won a toaster.',
        'What do you call a fake noodle?    An impasta.',
        'My wife accused me the other day of being too immature.    I told her there were no girls allowed in my fort.',
        'Someone stole my mood ring yesterday.     I still don’t know how I feel about that.',
        'A Roman legionnaire walks into a bar, holds up two fingers and says, “Five beers, please.”',
        'I tried to catch fog yesterday.    Mist.',
        'Working in a mirror factory is something I can totally see myself doing.',
        'Someone stole my Microsoft Office and they’re gonna pay.   You have my Word.',
        'What do you call a dog with no legs?     It doesn’t matter, it’s not going to come anyway.',
        'You know what they say about cliffhangers…',
        'Why does a chicken coop only have two doors?   Because if it had four doors, it would be a chicken sedan.',
        'A sandwich walks into a bar.   The bartender says, “Sorry, we don’t serve food here.”',
        'I got a new job last week as the new top dog at Old MacDonald’s farm.    I’m the new C-I-E-I-O.',
        'Why did the giraffe get such bad grades?     He always had his head stuck in the clouds.',
        'Why are frogs always so happy?     They eat whatever bugs them.',
        'Whenever you jump on a trampoline, did you know it changes the season?     No matter what time of year, it always becomes spring time.',
        'Why didn’t the skeleton go to the dance?     Because he had no body to go with.',
        'What do you call a musician with problems?     A trebled man.',
        'Where do snowmen keep their savings?     In the snowbank.',
        'What do you call a religious person who sleepwalks?    A roamin’ Catholic.',
        'Did you hear about the carrot detective?   He always got to the root of every case.',
        'What washes up on very small beaches?    Micro-waves',
        'What did one elevator say to the other?    I think I’m coming down with something.',
        'What happened when a faucet, a tomato, and some lettuce ran a race together?   The lettuce was ahead, the faucet was running, and the tomato was trying to ketchup.',
        'What do you call a belt with a watch on it?    A waist of time.',
        'Why did the tomato turn red?   It saw the salad dressing.',
        'What did the grape do when it got stepped on?    It let out a little wine.',
        'Why won’t skeletons fight each other?    They just don’t have the guts.',

        // Parade funny one-liners
        'My wife told me to stop impersonating a flamingo. I had to put my foot down. ',
        'I went to buy some camo pants but couldn’t find any.',
        'I failed math so many times at school, I can’t even count.',
        'I used to have a handle on life, but then it broke.',
        'I was wondering why the frisbee kept getting bigger and bigger, but then it hit me.',
        'I heard there were a bunch of break-ins over at the car park. That is wrong on so many levels.',
        'I want to die peacefully in my sleep, like my grandfather… Not screaming and yelling like the passengers in his car.',
        'When life gives you melons, you might be dyslexic.',
        'Don’t you hate it when someone answers their own questions? I do.',
        'It takes a lot of balls to golf the way I do.',
        'I told him to be himself; that was pretty mean, I guess. ',
        'I know they say that money talks, but all mine says is ‘Goodbye.’',
        'My father has schizophrenia, but he’s good people.',
        'The problem with kleptomaniacs is that they always take things literally.',
        'I can’t believe I got fired from the calendar factory. All I did was take a day off.',
        'Most people are shocked when they find out how bad I am as an electrician.',
        'Never trust atoms; they make up everything.',
        'My wife just found out I replaced our bed with a trampoline. She hit the ceiling! ',
        'I was addicted to the hokey pokey, but then I turned myself around.',
        'I used to think I was indecisive. But now I’m not so sure.',
        'Russian dolls are so full of themselves.',
        'The easiest time to add insult to injury is when you’re signing someone’s cast.',
        'Light travels faster than sound, which is the reason that some people appear bright before you hear them speak. ',
        'My therapist says I have a preoccupation for revenge. We’ll see about that.',
        'A termite walks into the bar and asks, ‘Is the bar tender here?’',
        'A told my girlfriend she drew her eyebrows too high. She seemed surprised.',
        'People who use selfie sticks really need to have a good, long look at themselves. ',
        'Two fish are in a tank. One says, ‘How do you drive this thing?’',
        'I always take life with a grain of salt. And a slice of lemon. And a shot of tequila.',
        'Just burned 2,000 calories. That’s the last time I leave brownies in the oven while I nap.',
        'Always borrow money from a pessimist. They’ll never expect it back.',
        'Build a man a fire and he’ll be warm for a day. Set a man on fire and he’ll be warm for the rest of his life.',
        'I don’t suffer from insanity—I enjoy every minute of it.',
        'The last thing I want to do is hurt you; but it’s still on the list.',
        'The problem isn’t that obesity runs in your family. It’s that no one runs in your family.',
        'Today a man knocked on my door and asked for a small donation toward the local swimming pool. I gave him a glass of water.',
        'I’m reading a book about anti-gravity. It’s impossible to put down.',
        '‘Doctor, there’s a patient on line one that says he’s invisible.’      ‘Well, tell him I can’t see him right now.’',
        'Atheism is a non-prophet organization.',
        'A recent study has found that women who carry a little extra weight live longer than the men who mention it.',
        'The future, the present, and the past walk into a bar. Things got a little tense.',
        'Before you criticize someone, walk a mile in their shoes. That way, when you do criticize them, you’re a mile away and you have their shoes.',
        'Last night my girlfriend was complaining that I never listen to her… or something like that.',
        'Maybe if we start telling people their brain is an app, they’ll want to use it.',
        'If a parsley farmer gets sued, can they garnish his wages?',
        'I got a new pair of gloves today, but they’re both ‘lefts,’ which on the one hand is great, but on the other, it’s just not right.',
        'I didn’t think orthopedic shoes would help, but I stand corrected.',
        'I was riding a donkey the other day when someone threw a rock at me and I fell off. I guess I was stoned off my ass.',
        'People who take care of chickens are literally chicken tenders.',
        'It was an emotional wedding. Even the cake was in tiers.',
        'I just got kicked out of a secret cooking society. I spilled the beans.',
        'What’s a frog’s favorite type of shoes? Open toad sandals.',
        'Blunt pencils are really pointless.',
        '6:30 is the best time on a clock, hands down.',
        'Two wifi engineers got married. The reception was fantastic.',
        'Just got fired from my job as a set designer. I left without making a scene.',
        'What’s the difference between ignorance and apathy? I don’t know and I don’t care.',
        'One of the cows didn’t produce milk today. It was an udder failure.',
        'Adam & Eve were the first ones to ignore the Apple terms and conditions.',
        'Refusing to go to the gym is a form of resistance training.',
        'If attacked by a mob of clowns, go for the juggler.',
        'The man who invented Velcro has died. RIP.',
        'Despite the high cost of living, it remains popular.',
        'A dung beetle walks into a bar and asks, ‘Is this stool taken?’',
        'I can tell when people are being judgmental just by looking at them.',
        'The rotation of Earth really makes my day.',
        'Well, to be Frank with you, I’d have to change my name.',
        'My friend was explaining electricity to me, but I was like, ‘Watt?’',
        'What if there were no hypothetical questions?',
        'Are people born with photographic memories, or does it take time to develop?',
        'The world champion tongue twister got arrested. I hear they’re going to give him a tough sentence.',
        'Pollen is what happens when flowers can’t keep it in their plants.',
        'A book fell on my head the other day. I only have my shelf to blame though.',
        'Communist jokes aren’t funny unless everyone gets them.',
        'Geology rocks, but geography’s where it’s at.',
        'I buy all my guns from a guy called T-Rex. He’s a small arms dealer.',
        'My friend’s bakery burned down last night. Now his business is toast.',
        'Four fonts walk into a bar. The bartender says, ‘Hey! We don’t want your type in here!’',
        'If you don’t pay your exorcist, do you get repossessed?',
        'When the cannibal showed up late to the buffet, they gave him the cold shoulder.',
        'A Mexican magician tells the audience he will disappear on the count of three. He says, ‘Uno, dos…” and poof! He disappeared without a tres.',
        'Fighting for peace is like screwing for virginity.',
        'A ghost walked into a bar and ordered a shot of vodka. The bartender said, ‘Sorry, we don’t serve spirits here.’',
        'The man who invented knock-knock jokes should get a no bell prize.',
        'I bought the world’s worst thesaurus yesterday. Not only is it terrible, it’s also terrible.',
        'A blind man walked into a bar… and a table… and a chair…',
        'A Freudian slip is when you mean one thing and mean your mother.',
        'I went to a seafood disco last week, but ended up pulling a mussel.',
        'The first time I got a universal remote control, I thought to myself, ‘This changes everything.’',
        'How do you make holy water? You boil the hell out of it.',
        'I saw a sign the other day that said, ‘Watch for children,’ and I thought, ‘That sounds like a fair trade.’',
        'Whiteboards are remarkable.',
        'I threw a boomerang a couple years ago; I know live in constant fear.',
        'I put my grandma on speed dial the other day. I call it insta-gram.',
        'I have a few jokes about unemployed people, but none of them work.',
        '‘I have a split personality,’ said Tom, being Frank.',
        'My teachers told me I’d never amount to much because I procrastinate so much. I told them, “Just you wait!”',
        'Will glass coffins be a success? Remains to be seen.',
        'Did you hear about the guy whose whole left side got amputated? He’s all right now.',
        'The man who survived both mustard gas and pepper spray is a seasoned veteran now.',
        'Have you heard about the new restaurant called ‘Karma?’ There’s no menu—you get what you deserve.',

        // Parade funny quotes
        '“I’m sick of following my dreams, man. I’m just going to ask where they’re going and hook up with ’em later.”
        —Mitch Hedberg',
        '“Gentlemen, you can’t fight in here. This is the war room.”
        —President Merkin Muffley (Peter Sellers), Dr. Strangelove',
        '“My mother always used to say: The older you get, the better you get, unless you’re a banana.”
        —Rose (Betty White), The Golden Girls',
        ' “Halloween is the beginning of the holiday shopping season. That’s for women. The beginning of the holiday shopping season for men is Christmas Eve.”
        —David Letterman',
        '“Before you criticize someone, you should walk a mile in their shoes. That way when you criticize them, you are a mile away from them and you have their shoes.”
        —Jack Handey',
        'Bob: “Looks like you’ve been missing a lot of work lately.”
        Peter: “I wouldn’t say I’ve been missing it, Bob.”
        —Bob (Paul Wilson) and Peter (Ron Livingston), Office Space',
        '“Clothes make the man. Naked people have little or no influence in society.”
        —Mark Twain',
        '“Before you marry a person, you should first make them use a computer with slow Internet to see who they really are.”
        —Will Ferrell',
        '“I love being married. It’s so great to find that one special person you want to annoy for the rest of your life.”
        —Rita Rudner',
        '“Ned, I would love to stand here and talk with you—but I’m not going to.”
        —Phil Connors (Bill Murray), Groundhog Day',
        '“When your mother asks, ‘Do you want a piece of advice?’ it is a mere formality. It doesn’t matter if you answer yes or no. You’re going to get it anyway.”
        —Erma Bombeck',
        '“I want my children to have all the things I couldn’t afford. Then I want to move in with them.”
        —Phyllis Diller',
        '“Never follow anyone else’s path. Unless you’re in the woods and you’re lost and you see a path. Then by all means follow that path.”
        —Ellen DeGeneres',
        '“Insomnia sharpens your math skills because you spend all night calculating how much sleep you’ll get if you’re able to ‘fall asleep right now.’”
        —Anonymous',
        '“Breaking up is like knocking over a Coke machine. You can’t do it in one push; you got to rock it back and forth a few times, and then it goes over.”
        —Jerry (Jerry Seinfeld), Seinfeld',
        '“I’m not superstitious, but I am a little stitious.”
        —Michael Scott (Steve Carrell), The Office',
        '“I walk around like everything’s fine, but deep down, inside my shoe, my sock is sliding off.”
        —Anonymous',
        '“I haven’t spoken to my wife in years. I didn’t want to interrupt her.”
        —Rodney Dangerfield',
        '“I used to sell furniture for a living. The trouble was, it was my own.”
        —Les Dawson',
        ' “There’s nothing wrong with you that an expensive operation can’t prolong.”
        —Surgeon (Graham Chapman), Monty Python’s Flying Circus',
        '“Someone asked me, if I were stranded on a desert island what book would I bring: ‘How to Build a Boat.’”
        —Steven Wright',
        'Ted Striker: “Surely you can’t be serious.”
        Dr. Rumack: “I am serious. And don’t call me Shirley”
        —Ted Striker (Robert Hays) and Dr. Rumack (Leslie Nielsen), Airplane!',
        '“There is no sunrise so beautiful that it is worth waking me up to see it.”
        ―Mindy Kaling, Is Everyone Hanging Out Without Me?',
        '“You know you’ve reached middle age when you’re cautioned to slow down by your doctor, instead of by the police.”
        —Joan Rivers',
        '“Truth hurts. Maybe not as much as jumping on a bicycle with a seat missing, but it hurts.”
        —Lt. Frank Drebin (Leslie Nielsen), Naked Gun 2½: The Smell of Fear',
        '“My Mama says that alligators are ornery because they got all them teeth and no toothbrush.”
        —Bobby Boucher (Adam Sandler), The Waterboy',
        '“I never feel more alone than when I’m trying to put sunscreen on my back.”
        —Jimmy Kimmel',
        '“Marriage is like an unfunny, tense version of Everybody Loves Raymond, but it doesn’t last 22 minutes. It lasts forever.”
        —Pete (Paul Rudd), Knocked Up',
        '“Being a mom means never buying the right amount of produce. Either everyone suddenly loves grapes and a week’s worth are eaten in one afternoon, or fruit flies are congregating around my rotting bananas.”
        —Lessons from the Minivan',
        '“I’m not insane. My mother had me tested.”
        —Sheldon Cooper (Jim Parsons), The Big Bang Theory',
        '“There are only three ages for women in Hollywood: babe, district attorney and Driving Miss Daisy.”
        —Elise (Goldie Hawn), The First Wives Club',
        'Usher: “Bride or groom?”
        Wedding guest: “It should be perfectly obvious I’m neither!”
        —Four Weddings and a Funeral',
        'Stan Fields: “Describe your perfect date.”
        Cheryl: “That’s a tough one. I’d have to say April 25. Because it’s not too hot and not too cold. All you need is a light jacket.”
        —Stan Fields (William Shatner) and Cheryl Frasier (Heather Burns), Miss Congeniality',
        '“I saw a study that said speaking in front of a crowd is considered the number one fear of the average person. Number two was death. This means to the average person, if you have to be at a funeral, you would rather be in the casket than doing the eulogy.”
        —Jerry Seinfeld',
        'Lucy: “There’s just two things keeping me from dancing in that show.”
        Fred: “Your feet?”
        —Lucy (Lucille Ball) and Fred Mertz (William Frawley), I Love Lucy',
        '“Common sense is like deodorant. The people who need it most never use it.”
        —Anonymous',
        'Coach: “How’s a beer sound, Norm?”
        Norm: “I don’t know, I usually finish before they get a word in.”
        —Coach (Nicholas Colasanto) and Norm (George Wendt), Cheers',
        '“If I woke up tomorrow with my head sewn to the carpet, I wouldn’t be more surprised.” —Clark Griswold (Chevy Chase), National Lampoon’s Christmas Vacation',
        '“There’s nothing simpler than avoiding people you don’t like. Avoiding one’s friends, that’s the real test.”
        —Dowager Countess Violet Crawley (Maggie Smith), Downton Abbey',
        '“If I’m not back in five minutes, just wait longer.”
        —Ace Ventura (Jim Carrey), Ace Ventura: Pet Detective',
        '“The only thing that separates us from the animals is our ability to accessorize.”
        —Clairee Belcher (Olivia Dukakis), Steel Magnolias',
        '“I’m at a place in my life when errands are starting to count as going out.”
        —Anonymous',
        '“A good rule to remember for life is that when it comes to plastic surgery and sushi, never be attracted by a bargain.”
        —Graham Norton',
        '“I’m not good at the advice. Can I interest you in a sarcastic comment?”
        —Chandler (Matthew Perry), Friends',
        '“Here’s all you have to know about men and women: Women are crazy, men are stupid. And the main reason women are crazy is that men are stupid.”
        —George Carlin',
        '“When I’m in social situations, I always hold onto my glass. It makes me feel comfortable and secure and I don’t have to shake hands.”
        —Larry (Larry David), Curb Your Enthusiasm',
        '“As you get older, three things happen. The first is your memory goes, and I can’t remember the other two.”
        —Sir Norman Wisdom',
        ' “That’s why New York is so great, though. Everyone you care about can despise you and you can still find a bagel so good, nothing else matters. Who needs love when you’ve got lox? They both stink, but only one tastes good.”
        —Midge Maisel (Rachel Brosnahan), The Marvelous Mrs. Maisel',
        '“Here’s some advice: At a job interview, tell them you’re willing to give 110 percent. Unless the job is a statistician.”
        —Adam Gropman',
        '“Does it disturb anyone else that ‘The Los Angeles Angels’ baseball team translates directly to ‘The The Angels Angels’?”
        —Neil DeGrasse Tyson',
        '“I never forget a face—but in your case, I’ll be glad to make an exception.”
        —Groucho Marx',
        '“Here’s something to think about: How come you never see a headline like ‘Psychic Wins Lottery’?”
        —Jay Leno',
        '“A day without sunshine is like, you know, night.”
        —Steve Martin',
        '“My therapist told me the way to achieve true inner peace is to finish what I start. So far I’ve finished two bags of M&Ms and a chocolate cake. I feel better already.”
        —Dave Barry',
        '“Never do anything out of hunger. Not even eating.”
        —Frank Semyon (Vince Vaughn), True Detective',
        '“What do you mean, he don’t eat no meat? That’s okay, that’s okay. I make lamb.”
        —Aunt Voula (Andrea Martin), My Big Fat Greek Wedding',
        '“You know you’re getting old when you stoop to tie your shoelaces and wonder what else you could do while you’re down there.”
        —George Burns',
        '“To call you stupid would be an insult to stupid people!”
        —Wanda (Jamie Lee Curtis), A Fish Called Wanda',
        '“Instead of the mahi mahi, may I just get the one mahi because I’m not that hungry?”
        —Shelley Darlingson (Anna Faris), The House Bunny',
        '“Accept who you are. Unless you’re a serial killer.”
        —Ellen DeGeneres',
        'Francois: “Do you know what kind of a bomb it was?”
        Clouseau: “The exploding kind.”
        —Francois (André Maranne) and Inspector Clouseau (Peter Sellers), The Pink Panther Strikes Again',
        '“My ability to turn good news into anxiety is rivaled only by my ability to turn anxiety into chin acne.”
        —Tina Fey, Bossypants',
        '“There is one word that describes people that don’t like me: Irrelevant.”
        —Anonymous',
        '“Why do they call it rush hour when nothing moves?”
        —Robin Williams',
        '“I remember it like it was yesterday. Of course, I don’t really remember yesterday all that well.”
        —Dory (Ellen DeGeneres), Finding Dory',
        '“I don’t have to take this abuse from you; I’ve got hundreds of people dying to abuse me.”
        —Dr. Peter Venkman (Bill Murray), Ghostbusters',
        'Police officer: “Pull over.”
        Harry: “No, it’s a cardigan. But thanks for noticing.”
        —Harry Dunne (Jeff Daniels), Dumb and Dumber',
        '“I grew up with six brothers. That’s how I learned to dance: waiting for the bathroom.”
        —Bob Hope',
        '“If we’re going to pay this much for crab, it better sing and dance and introduce us to the Little Mermaid.”
        —Claire Foster (Tina Fey), Date Night',
        '“I prefer not to think before speaking. I like being as surprised as everyone else by what comes out of my mouth.”
        —Anonymous',
        '“Never put off till tomorrow what you can do the day after tomorrow just as well.”
        —Mark Twain',
        '“Woke up today. It was terrible.”
        —Grumpy Cat',
        '“Eggs are fantastic for a fitness diet. If you don’t like the taste, just add cocoa, flour, sugar, butter, baking powder and cook at 350 for 30 minutes.”
        —Anonymous',
        ' “I can’t end my messages with Love, Shaq because the B-52s ruined that for me.”
        —Meme attributed to Shaquille O’Neal',
        '“My husband and I fell in love at first sight. Maybe I should have taken a second look.”
        —Halley Reed (Mia Farrow), Crimes and Misdemeanors',
        '“Thanksgiving dinners take 18 hours to prepare. They are consumed in 12 minutes. Half-times take 12 minutes. This is not a coincidence.”
        —Erma Bombeck',
        '“Insanity runs in my family. It practically gallops.”
        —Mortimer Brewster (Cary Grant), Arsenic and Old Lace',
        'Brian: “Look, you’ve got it all wrong. You don’t need to follow me. You don’t need to follow anybody. You’ve got to think for yourselves. You’re all individuals.”
        Crowd: “Yes, we’re all individuals!”
        Individual: “I’m not!”
        —Brian (Graham Chapman) and cast, Monty Python’s Life of Brian',
        '“Why can’t you just be happy for me and then go home and talk behind my back later like a normal person?”
        —Lillian (Maya Rudolph), Bridesmaids',
        '“Anyone who lives within their means suffers from a lack of imagination.”
        —Oscar Wilde',
        '“What they could do to make it easier is combine the two, real estate and obituaries: Mr. Klein died today leaving a wife, two children, and a spacious three-bedroom apartment with a wood-burning fireplace.”
        —Harry (Billy Crystal), When Harry Met Sally',
        '“The key to faking out the parents is the clammy hands. It’s a good non-specific symptom; I’m a big believer in it. A lot of people will tell you that a good phony fever is a dead lock, but you get a nervous mother, you could wind up in a doctor’s office. That’s worse than school. You fake a stomach cramp, and when you’re bent over, moaning and wailing, you lick your palms. It’s a little childish and stupid, but then, so is high school.”
        —Ferris Bueller (Matthew Broderick), Ferris Bueller’s Day Off',
        '“I like my money where I can see it: hanging in my closet.”
        —Carrie (Sarah Jessica Parker), Sex and the City',
        'Cal: “You are really pushing my buttons today.”
        Becky: “Which one is ‘mute’?”
        —Waitress, the Musical',
        '“The worst part of online shopping is having to get up and get your credit card from your purse.”
        —Anonymous',
        '“People say, ‘But Betty, Facebook is a great way to connect with old friends.’ Well, at my age, if I want to connect with old friends I need a Ouija board.”
        —Betty White',
        '“My therapist says I’m afraid of success. I guess I could understand that, because after all, fulfilling my potential would really cut into my sitting-around time.”
        —Maria Bamford',
        '“From the ages of eight to 18, me and my family moved around a lot. Mostly we would just stretch, but occasionally one of us would actually get up to go to the fridge.”
        —Jarod Kintz',
        '“Money cannot buy health, but I’d settle for a diamond-studded wheelchair.”
        —Dorothy Parker',
        '“The whole purpose of places like Starbucks is for people with no decision-making ability whatsoever to make six decisions just to buy one cup of coffee. Short, tall, light, dark, caf, decaf, low-fat, non-fat. So people who don’t know what they’re doing, or who on earth they are can, for only $2.95, get not just a cup of coffee but an absolutely defining sense of self.”
        —Joe Fox (Tom Hanks), You’ve Got Mail',
        '“Good parenting means investing in your child’s future, which is why I am saving to buy mine a hoverboard someday.”
        —Lin-Manuel Miranda',
        ' “I love airports because the rules of society don’t apply. Eat a pizza and have a glass of wine at 7 am while in track pants. Nobody cares.”
        —Anonymous',
        '“Outside of a dog, a book is man’s best friend. Inside of a dog, it’s too dark to read.”
        —Groucho Marx',
        '“I’m one stomach flu away from my goal weight.”
        —Emily Charlton (Emily Blunt), The Devil Wears Prada',
        '“My perfect beautiful miracle baby? Never slept. Ever. Never. Twelve years later the memories of those nights, of that sleep deprivation, still make me rock back and forth a little bit. You want to torture someone? Hand them an adorable baby they love who doesn’t sleep.”
        —Shonda Rimes',
        '“I’d like to have a kid, but I’m not sure I’m ready to spend 10 years of my life constantly asking someone where his shoes are.”
        —Damien Fahey',
        '“Why yes, I can carry on a conversation made up entirely of movie quotes.”
        —Anonymous',
        '“I’m sure wherever my Dad is, he’s looking down on us. He’s not dead, just very condescending.”
        —Jack Whitehall',
        '“I like long walks, especially when they are taken by people who annoy me.”
        —Noel Coward',
        '“Trying is the first step toward failure.”
        —Homer Simpson, The Simpsons',
        '“I have a lot of growing up to do. I realized that the other day inside my fort.”
        —Zach Galifianakis',

        // Parade best dad jokes
        'Which bear is the most condescending? A pan-duh!',
        'What kind of noise does a witch’s vehicle make? Brrrroooom, brrroooom.',
        'What’s brown and sticky? A stick.',
        'Two guys walked into a bar. The third guy ducked.',
        'How do you get a country girl’s attention? A tractor.',
        'Why are elevator jokes so classic and good? They work on many levels.',
        'What do you call a pudgy psychic? A four-chin teller.',
        'What did the police officer say to his belly-button? You’re under a vest.',
        'What do you call it when a group of apes starts a company? Monkey business.',
        'My wife asked me to stop singing “Wonderwall” to her. I said maybe…',
        'What kind of drink can be bitter and sweet? Reali-tea.',
        'What do you call a naughty lamb dressed up like a skeleton for Halloween? Baaad to the bone.',
        'Want to know why nurses like red crayons? Sometimes they have to draw blood.',
        'What would the Terminator be called in his retirement? The Exterminator.',
        'What did Tennessee? The same thing as Arkansas.',
        'My wife asked me to go get 6 cans of Sprite from the grocery store. I realized when I got home that I had picked 7 up.',
        'Why do bees have sticky hair? Because they use a honeycomb.',
        'Why do some couples go to the gym? Because they want their relationship to work out.',
        'What do you call an angry musician flipping someone off? A song bird.',
        'What’s the most detail-oriented ocean? The Pacific.',
        'Did you hear about the kidnapping at school? It’s fine, he woke up.',
        'How can you tell it’s a dogwood tree? By the bark.',
        'My boss told me to have a good day, so I went home.',
        'Why did the man fall down the well? Because he couldn’t see that well.',
        'When does a joke become a “dad joke?” When it becomes apparent.',
        'Why is Peter Pan always flying? Because he Neverlands.',
        'Which state has the most streets? Rhode Island.',
        'What do you call 26 letters that went for a swim? Alphawetical.',
        'What’s the name of a very polite, European body of water? Merci.',
        'Why was the color green notoriously single? It was always so jaded.',
        'I used to hate facial hair, but then it grew on me.',
        'I want to make a brief joke, but it’s a little cheesy.',
        'Why did the coach go to the bank? To get his quarterback.',
        'How do celebrities stay cool? They have many fans.',
        'Sundays are always a little sad, but the day before is a sadder day.',
        '5/4 of people admit they’re bad at fractions.',
        'Why did the bedding hide their relationship? They just wanted something pillow-key!',
        'You’re American when you go into a bathroom and when you come out, but what are you while you’re in the bathroom? European.',
        'I’ve been thinking about taking up meditation. I figure it’s better than sitting around doing nothing.',
        'Dogs can’t operate MRI machines. But catscan.',
        'What did the flowers do when the bride walked down the aisle? They rose.',
        'It takes guts to be an organ donor.',
        'What does “Rockin’ Robin” do when she’s bored? Tweet.',
        'I lost my job at the bank on my first day. A woman asked me to check her balance, so I pushed her over.',
        'How do you row a canoe filled with puppies? Bring out the doggy paddle.',
        'Singing in the shower is fun until you get soap in your mouth. Then it becomes a soap opera.',
        'Why were the utensils stuck together? They were spooning.',
        'What’s a crafty dancer’s favorite hobby? Cutting a rug.',
        'How does a penguin build his house? Igloos it together.',
        'What kind of music do chiropractors like? Hip pop.',
        'What kind of shoes does a lazy person wear? Loafers.',
        'Why is cold water so insecure? Because it’s never called hot.',
        'I was going to tell a time-traveling joke, but you guys didn’t like it.',
        'Shouldn’t the “roof” of your mouth actually be called the ceiling?',
        'Stop looking for the perfect match…use a lighter.',
        'I told my doctor I heard buzzing, but he said it’s just a bug going around.',
        'What kind of car does a sheep like to drive? A lamborghini.',
        'What did the accountant say while auditing a document? This is taxing.',
        'What did the two pieces of bread say on their wedding day? It was loaf at first sight.',
        'If the early bird gets the worm, I’ll sleep in until there’s pancakes.',
        'Why do melons have weddings? Because they cantaloupe.',
        'I signed up for a marathon, but how will I know if it’s the real deal or just a run through?',
        'When you have a bladder infection, urine trouble.',
        'What did the drummer call his twin daughters? Anna One, Anna Two!',
        'What did the juicer say to the orange during self-quarantine? Can’t wait to squeeze you!',
        'What do you call a toothless bear? A gummy bear!',
        'Want to hear a joke about construction? I’m still working on it.',
        'Someone told me that I should write a book. I said, “That’s a novel concept.”',
        'Two goldfish are in a tank. One says to the other, “Do you know how to drive this thing?”',
        'What’s Forrest Gump’s password? 1forrest1',
        'I tell dad jokes, but I don’t have any kids. I’m a faux pa.',
        'What does a nosey pepper do? It gets jalapeño business.',
        'If a child refuses to nap, are they guilty of resisting a rest?',
        'Why do dads feel the need to tell such bad jokes? They just want to help you become a groan up.',
        'I know a lot of jokes about retired people, but none of them work.',
        'Why are spiders so smart? They can find everything on the web.',
        'RIP boiled water—you will be mist.',
        'What do you call two octopuses that look the same? Itenticle.',
        'What has one head, one foot, and four legs? A bed.',
        'Sore throats are a pain in the neck.',
        'What does a house wear? Address.',
        'Why did the scarecrow win an award? He was out standing in his field.',
        'What’s red and smells like blue paint? Red paint.',
        'My son asked me to put his shoes on, but I don’t think they’ll fit me.',
        'I’ve been bored recently, so I decided to take up fencing. The neighbors keep demanding that I put it back.',
        'What do you call an unpredictable camera? A loose Canon.',
        'I didn’t get a haircut, I got them all cut.',
        'Which U.S. state is known for its especially small soft drinks? Minnesota.',
        'What do sprinters eat before a race? Nothing—they fast.',
        'What did one Dorito farmer say to the other? “Cool Ranch!”',
        'Why couldn’t the bicycle stand up by itself? It was two-tired.',
        'I’m so good at sleeping, I can do it with my eyes closed.',
        'People are usually shocked that I have a Police record. But I love their greatest hits!',
        'I told my girlfriend she drew on her eyebrows too high. She seemed surprised.',
        'What do you call a fibbing cat? A lion.',
        'Why shouldn’t you write with a broken pencil? Because it’s pointless.',
        'I like telling Dad jokes…sometimes he laughs.',
        'How do you weigh a millennial? In Instagrams.',
        'The wedding was so beautiful, even the cake was in tiers.',
        'What’s the most patriotic sport? Flag football.',
        'Why were spectators confused by the koala’s self-portrait? It was bear.',
        'Why did the envelope take so long to get ready? It had to get addressed.',
        'What does a karate master get rewarded with while driving? A seat belt.',
        'What did the husband say to his wife right after getting LASIK surgery? “Aren’t you a sight for sore eyes?”',
        'What do lions use to look at their manes? Mirroars.',
        'What did the dad say when his golden retriever was caught eating a hot dog? “It’s a dog eat dog world out there.”',
        'Do mascara and lipstick ever argue? Sure, but then they makeup.',
        'What piece on the playground is always exhausted? The tire swing.',
        'Why did two tall people get along so well? The could really see eye to eye.',
        'Why was the gossip disliked at the coffee shop? She always spilled the tea.',
        'What does a writer have in common with a football player? Anxiety over a rough draft.',
        'Where do wasps like to get lunch? A bee-stro.',
        'Why would doors do well on social media? Everyone looks for their handles.',
        'Which bathroom appliance would be the worst life preserver? The sink.',
        'Why was the dad sitting on a pack of playing cards? His kid asked him to sit on the deck.',
        'What kind of bird is always getting hurt? The owl.',
        'What’s either a really gross animal issue OR an impressive, magical school? Hogwarts.',
        'What did the dishwasher say to the oven after a productive day? “You’ve been on fire!”',
        'Why did the cashier rip money in half? They were asked to break a bill.',
        'What did one furniture maker say to another during a tense discussion? “Let’s table this.”',
        'Why was the ghost so tired? He worked the graveyard shift.',
        'Why do pancakes always win at baseball? They have the best batter.',
        'Why couldn’t the couple get married at the library? It was all booked up.',
        'How did the dad prank his daughter using fake dog poop on April Fools Day? He told her to look out for her new sham-poo in the shower.',
        'What did the air conditioner say when it met a celebrity? “I’m a big fan.”',
        'What was Sherlock Holmes’ favorite protein source? Mystery meat.',
        'What did the dryer say to the boring duvet cover that just got out of the washer? “Don’t be such a wet blanket.”',
        'Why was the cow such a heartthrob on the farm? He was a s-moo-th talker.',
        'What’s a writer’s favorite train station? Penn Station.',
        'What was said about the messy, angry man who was eating a can of Pringles? “He’s got a chip on his shoulder.”',
        'What’s it called when kittens get stuck in a tree? A cat-astrophe.',
        'What kind of shape may have been knighted? Cir-cles.',
        'Why is sand so optimistic? It has a can-dune attitude.',
        'What part of the museum makes everyone sneeze? The sta-tues.',
        'What did the baker say when she won an award? “It was a piece of cake.”',
        'Why couldn’t the couple respond right away when looking at wedding venues? They were engaged.',
        'What is Marco’s favorite clothing store? Polo.',
        'What do you call it when a lawyer takes a test early in the morning? A breakfast bar.',
        'What do frogs use to track their exercise? Fit (rib)bits.',
        'What kind of cleaning product feels a lot of motivation in life? All-purpose.',
        'Where was the dripping coming from in the fridge? The leeks.',
        'Why was the hockey player gifted a new cap? He was known for his hat tricks.',
        'What vegetable is kind to everyone? The sweet potato.',
        'How was the handsome runner described? “Dashing.”',
        'What animals are the best to call if you get locked out of your house? Monkeys.',
        'What did the geometry teacher say when the class had trouble solving a problem? “Let’s try a different angle.”',
        'Why don’t phones ever go hungry? They have plenty of apps to choose from.',
        'Why couldn’t the family leave the room after playing with Legos? They were blocked.',
        'What makes a basketball court trendy and accessorized? The hoops.',
        'What did the sapphire’s best friend tell her? “You’re a real gem.”',

        // Parade bad jokes
        'Why don’t oysters donate to charity? Because they’re shellfish.',
        'What does a baby computer call its father? Data.',
        'What did the custodian say when he jumped out of the closet? “Supplies!”',
        'Why are colds bad criminals? Because they’re easy to catch.',
        'How does a penguin build its house? Igloos it together.',
        'Which knight invented King Arthur’s Round Table? Sir Cumference.',
        'What do sprinters eat before a race? Nothing. They fast.',
        'What do you call a fly without wings? A walk!',
        'What happens when you witness a ship wreck? You let it sink in.',
        'How can you find Will Smith in the snow? Follow the fresh prints.',
        'What does a clock do when it’s hungry? It goes back four seconds.',
        'What’s the easiest way to make a glow worm happy? Cut off its tail—it’ll be delighted!',
        'What do you call a belt made of watches? A waist of time!',
        'Why did Adele cross the road? To say hello from the other side!',
        'What’s the best way to carve wood? Whittle by whittle.',
        'What did the teacher do with the student’s report on cheese? She grated it.',
        'What’s the difference between a piano and a fish? You can tune a piano, but you can’t tuna fish.',
        'What did the pirate say on his 80th birthday? “Aye, matey!”',
        'How do you organize an astronomer’s party? You planet.',
        'What’s the action like at a circus? In-tents.',
        'Why did the scarecrow get promoted? Because he was outstanding in his field.',
        'Why does Snoop Dogg carry an umbrella? Fo’ drizzle.',
        'What do you call a pony with a sore throat? A little hoarse.',
        'What do you call a fish with no eye? Fsh.',
        'What do you call a boomerang that doesn’t come back? A stick!',
        'What kind of car does an egg drive? A Yolkswagen.',
        'What do you call a factory that sells generally decent goods? A satisfactory.',
        'Why was 6 afraid of 7? Because 7 ate 9.',
        'Why should you never eat a clock? Because it’s too time consuming.',
        'What should a sick bird do? Get tweetment.',
        'I want a job cleaning mirrors. It’s something I can really see myself doing.',
        'What grades did the pirate get on his report card? Seven Cs.',
        'How do you make a tissue dance? Put a little boogie in it.',
        'How did Ebenezer Scrooge win the football game? The ghost of Christmas passed!',
        'Did you hear about the mediocre restaurant on the moon? It has great food but no atmosphere.',
        'What kinds of pictures do hermit crabs take? Shellfies.',
        'What do you get a man with the heart of a lion? A lifetime ban from the zoo.',
        'What do you call a person with a briefcase in a tree? A branch manager.',
        'Why did the baby cookie cry? Because its mother was a wafer so long.',
        'What’s the difference between an alligator and a crocodile? One you’ll see later, the other you’ll see in a while.',
        'When is a door not really a door? When it’s really ajar.',
        'What do you do when you see a spaceman? Park in it, man.',
        'Why do you never see elephants hiding in trees? Because they’re so good at it!',
        'Did you hear about the claustrophobic astronaut? Poor guy really needed some space.',
        'What’s the No. 1 cause of divorce? Marriage!',
        'Why did the coffee call the police? It got mugged!',
        'Why did Cyclops close his school? He only had one pupil.',
        'Where do skunks pray? In pews.',
        'If you’re American when you come out of the bathroom, what are you when you’re in the bathroom? European.',
        'Why do birds fly south for the winter? Because it’s too far to walk.',
        'How did Darth Vader know what Luke Skywalker got him for Christmas? He felt his presents.',
        'What was the mummy’s favorite type of music? Wrap.',
        'I’m only familiar with 25 letters of the alphabet. I don’t know why.',
        'Did you hear about the beautiful wedding? Even the cake was in tiers.',
        'Why are there fences are cemeteries? Because everyone’s always dying to get in.',
        'A company is making glass coffins. Whether they’re successful remains to be seen.',
        'What did one wall say to the other? “Meet me at the corner!”',
        'What do you call a large African mammal with long hair and sandals? A hippie-potamus.',
        'How do you think the unthinkable? With an itheberg!',
        'What’s the award for being the best dentist? A plaque.',
        'Why can’t you hear a pterodactyl go to the bathroom? Because the P is silent.',
        'I bought sneakers from a drug dealer. I don’t know what he laced them with but I’ve been tripping all day!',
        'Why did Mozart hate chickens? Because when he asked them for their favorite composer, they said, “Bach! Bach! Bach!”',
        'Why did the toilet paper roll downhill? To get to the bottom.',
        'What’s the best name for a man who can’t stand? Neil.',
        'What do you call a deer with no eyes? No eyed deer.',
        'Why are groups of fish so smart? Because they travel in schools.',
        'How much does the heaviest skeleton weigh? A skeleton.',
        'What did the drummer name her twin daughters? Anna One, Anna Two.',
        'What’s big, gray and doesn’t matter? An irrelephant.',
        'Why did the snowman pick through a bag of carrots? Because he was picking his nose.',
        'Why does Waldo only wear stripes? Because he doesn’t want to be spotted.',
        'I witnessed an attempted murder earlier—fortunately only one crow showed up!',
        'I tried buying camouflage the other day but I couldn’t find any.',
        'What did one bean say to the other? “How you bean?”',
        'How do you catch a bra? With a booby trap.',
        'How many tickles can an octopus take? Tentacles!',
        'What do clouds wear under their shorts? Thunderpants.',
        'Did you hear about the guy who won the award for best knock knock joke? He won the no bell prize.',
        'Why did Cinderella get kicked off of the soccer team? Because she kept running from the ball!',
        'How many ears do space aliens have? Three: The left ear, right ear and the final front ear.',
        'Cosmetic surgery used to be taboo, but now when you talk about Botox no one raises an eyebrow.',
        'Did you hear the one about the three watering holes in the ground? Well, well, well…',
        'What did the socks say to the pants? “‘Sup britches?!”',
        'What shivers at the bottom of the ocean? A nervous wreck.',
        'What’s a ninja’s favorite type of shoes? Sneakers!',
        'I have the world’s worst thesaurus. Not only is it terrible, it’s also terrible.',
        'What do hillbillies drink from? Hiccups.',
        'What’s even better than Ted Danson? Ted singing and Danson.',
        'Why did the invisible man turn down a job offer? He couldn’t see himself doing it.',
        'What kind of music do windmills like? They’re metal fans.',
        'What do you call a fish with two knees? A tunee fish.',
        'I’d tell you the joke about perforated paper, but it’s tear-able.',
        'What do you call someone else’s cheese? Nacho cheese!',
        'What do you call a canine magician? A labracadabrador.',
        'The rotation of the earth really makes my day.',
        'Why do seagulls fly over the sea? Because if they flew over the bay, they’d be called bagels.',
        'What did the animals tell Simba when he walked too slow? Mufasa!',
        'What do you call Samsung’s security team? The Guardians of the Galaxy!',
        'I sold my vacuum yesterday. It was just collecting dust.',
        'What kind of tea is hardest to swallow? Reality.',
        'Why did the golfer need new pants? Because he got a hole in one.',
        'Why did the man get fired from the calendar factory? Because he took a few days off.',
        'What do you call an alligator wearing a vest? An investigator.',
        'How do snails fight? They slug it out.',
        'What’s Forrest Gump‘s email password? 1forrest1.',
        'What did the left butt cheek say to the right butt cheek? “You crack me up!”',
        'What do you call someone who points out the obvious? Someone who points out the obvious.',
        'What sound does a nut make when it sneezes? Cashew!',
        'Did you hear about the satellites’ wedding? The ceremony was OK, but the reception was terrific.',
        'What did the Atlantic Ocean say to the Pacific Ocean? Nothing, it just waved.',
        'What did the fish say when it swam into the wall? “Dam!”',
        'Which school supply is king? The ruler.',
        'What do you get when you cross a vampire with a snowman? Frostbite.',
        'What do you call a person with no body and no nose? Nobody knows.',
        'What’s green and sings? Elvis Parsley.',
        'How do you make holy water? You boil the hell out of it.',
        'A jumper cable walks into a bar. The bartender says, “I’ll serve you, but don’t start anything.”',
        'What’s the worst part of being an egg? You only get laid once (and it’s with your mom)!',
        'Three fish are in a tank. One asked the others, “How the heck do you drive this thing?”',
        'What concert is worth just 45 cents? 50 Cent and Nickelback.',
        'Why can’t a hand be 12 inches long? Because then it’d be a foot.',
        'What’s the difference between a dapper man on a bicycle and a poorly dressed man on a unicycle? Attire!',
        'I left my job at a shoe disposal plant. It was sole destroying.',
        'The past, the present and the future walked into a bar. It was tense.',
        'What did Eminem say when 50 Cent made him a sweater? “Gee, you knit?”',
        'What did the thumb say to the finger? “I’m in glove with you.”',
        'What does a nosy pepper do? It gets jalapeno business!',
        'Parallel lines have so much in common. It’s a shame they’ll never meet.',
        'There are three types of people in this world: People who are good at math and people who are not.',
        'What do you call an Italian astronaut? A specimen.',
        'Two guys walks into a bar. The third guy ducks.',
        'Why do ghosts love elevators? Because they lift their spirits.',
        'What do you call a snobby criminal going downstairs? A condescending con descending.',
        'What did the princess say in the photo booth? “Someday my prints will come.”',
        'What can you do if you’re scared of elevators? Take steps to avoid them.',
        'What’s brass and sounds like Tom Jones? Trombones.',
        'How do prisoners communicate with one another? Cell phones.',
        'How many bugs do you need to rent out an apartment? Tenants.',
        'What did one elevator say to the other? “I think I’m coming down with something.”',
        'What’s a foot’s favorite snack? Dori-toes.',
        'The shovel was a truly groundbreaking invention.',
        'What did Sushi A say to Sushi B? “Wasa-B!”',
        'You know why they called it “the dark ages?” There were too many knights.',
        'What’s the loudest kind of pet you can get? A trumpet.',
        'Two cannibals are eating a clown. One asks the other, “Does this taste funny to you?”',
        'Does anyone need an ark? I Noah guy.',
        'Why did the picture go to jail? Because it was framed!',
        'Why did the melons have a big wedding? Because they cantaloupe.',
        'Have you heard the joke about the bed? No? That’s because it hasn’t been made yet.',
        'Why can’t wildcats take tests? There are too many cheetahs.',
        'What do you call a can opener that doesn’t work? A can’t opener.',
        'Why shouldn’t you make a “dad joke” if you’re not a dad? Because it’s a faux pa.',
        'A man died after drinking varnish. It was a terrible end, but a beautiful finish.',
        'What’s the difference between Prince William and a tennis ball? One is heir to the throne and one is thrown in the air.',
        'What’s the derivative of Amazon? Amazon Prime.',
        'Why couldn’t the pirate sit down? His booty got stolen!',
        'Why was the broom late for a meeting? It overswept.',
        'How did the hipster burn his mouth? He sipped his coffee before it was cool.',
        'What did the over-excited gardener do when spring came? She wet her plants.',
        'What do you call Batman if he skips church? Christian Bale!',
        'I used to hate body hair, but then it grew on me.',
        'What do you call a bear with no teeth? A gummy bear.',
        'What kind of dinosaur has the biggest vocabulary? The thesaurus!',
        'What did the grape do when it got stomped on? It let out a little wine.',
        'What’s the best part about Switzerland? The flag is a big plus.',
        'What did the buffalo say when his son left? Bison!',
        'What do you call a fake noodle? An impasta!',
        'Did you know the first French fries weren’t cooked in France? They were cooked in Greece!',
        'What do carb-loving zombies eat? Graaaaaaaains.',
        'What’s the best time to see a dentist? Tooth hurty.',
        'What’s the difference between a hippo and a Zippo? One is heavy and one is a lot lighter.',
        'Why shouldn’t you write with a dull pencil? Because it’s pointless.',
        'How much does an influencer weigh? An Instagram.',
        'What do you get when you combine a rhetorical question and a joke?',

	];

	public function __construct(array $jokes = null)
	{
		if ($jokes) {
			$this->jokes = $jokes;
		}
	}

	public function getRandomJoke()
	{
		return array($this->jokes[array_rand($this->jokes)]);
	}

    public function getRandomJokes($num = 10)
	{
        if($num > count($this->jokes)){
            $num = count($this->jokes);
        }
        $jokes = array($this->jokes[array_rand($this->jokes)]);
        $i = 1;
        while($i < $num){
            $newJoke = $this->jokes[array_rand($this->jokes)];
            if (in_array($newJoke, $jokes)){
                null;
            }else{
                array_push($jokes, $newJoke);
                $i++;
            }

        }
		return $jokes;

        //  For counting
        // $jokes = count($this->jokes);
        // return $jokes;
	}
}

