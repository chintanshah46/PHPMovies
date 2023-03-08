<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 

        Movie::create( 
            [
                'name' => 'The Bubble',
                'release_date' => '2022-04-01',
                'description' => 'A group of actors and actresses stuck inside a pandemic bubble at a hotel attempt to complete a film.',
                'photo' => '',
            ]);

        Movie::create( 
            [
                'name' => 'House Comes with a Bird',
                'release_date' => '2022-03-24',
                'description' => 'In a striking modernist villa, Penn puts on her heels, puts on her sunglasses, and leaves instructions for Jean to take care of the house. Jean plays the cello and receives potential buyers for the villa, while a parrot sits in a cage and a turtle wanders around the backyard.',
                'photo' => '',
            ]);   
            
        Movie::create( 
            [
                'name' => 'We Can Be Heroes',
                'release_date' => '2020-12-25',
                'description' => 'When alien invaders capture the Earth\'s superheroes, their kids must learn to work together to save their parents and the planet.',
                'photo' => '',
            ]);   
            
        Movie::create( 
            [
                'name' => 'The Proposal',
                'release_date' => '2009-06-19',
                'description' => 'A pushy boss forces her young assistant to marry her in order to keep her visa status in the U.S. and avoid deportation to Canada.',
                'photo' => 'photos/test_proposal.jpg',
            ]); 
            
        Movie::create( 
            [
                'name' => 'Wonder Woman',
                'release_date' => '2017-06-02',
                'description' => 'When a pilot crashes and tells of conflict in the outside world, Diana, an Amazonian warrior in training, leaves home to fight a war, discovering her full powers and true destiny.',
                'photo' => '',
            ]);            

        Actor::create( 
            [
                'name' => 'Pedro Pascal',
                'birth_date' => '1975-04-02',
                'birth_place' => 'Chile',
                'description' => 'Pedro Pascal is a Chilean-born actor. He is best known for portraying the roles of Oberyn Martell in the fourth season of the HBO series Game of Thrones (2011), Javier Peña in the Netflix series Narcos (2015), the titular character in the Disney+ series The Mandalorian (2019) and Joel Miller in the HBO series The Last of Us (2023).',
                'photo' => 'photos/test_pedro.jpg',
            ]);

        Actor::create( 
            [
                'name' => 'Ryan Reynolds',
                'birth_date' => '1976-10-23',
                'birth_place' => 'Canada',
                'description' => 'Ryan Rodney Reynolds was born on October 23, 1976 in Vancouver, British Columbia, Canada, the youngest of four children. His father, James Chester Reynolds, was a food wholesaler, and his mother, Tamara Lee "Tammy" (Stewart), worked as a retail-store saleswoman. He has Irish and Scottish ancestry. Between 1991-93, Ryan appeared in Fifteen (1990), a Nickleodeon series taped in Florida with many other Canadian actors. After the series ended, he returned to Vancouver where he played in a series of forgettable television movies. He did small roles in Glenn Close\'s Serving in Silence: The Margarethe Cammermeyer Story (1995) and CBS\'s update of In Cold Blood (1996). However, his run of luck had led him to decide to quit acting.',
                'photo' => '',
            ]);

        Actor::create( 
            [
                'name' => 'Sandra Bullock',
                'birth_date' => '1964-07-26',
                'birth_place' => 'USA',
                'description' => 'Sandra Annette Bullock was born in Arlington, a Virginia suburb of Washington, D.C. Her mother, Helga Bullock (née Helga Mathilde Meyer), was a German opera singer. Her father, John W. Bullock, was an American voice teacher, who was born in Alabama, of German descent. Sandra grew up on the road with her parents and younger sister, chef Gesine Bullock-Prado, and spent much of her childhood in Nuremberg, Germany. She often performed in the children\'s chorus of whatever production her mother was in. That singing talent later came in handy for her role as an aspiring country singer in The Thing Called Love (1993). Her family moved back to the Washington area when she was adolescent. She later enrolled in East Carolina University in North Carolina, where she studied acting. Shortly afterward she moved to New York to pursue a career on the stage. This led to acting in television programs and then feature films. She gave memorable performances in Demolition Man (1993) and Wrestling Ernest Hemingway (1993), but did not achieve the stardom that seemed inevitable for her until her work in the smash hit Speed (1994). She now ranks as one of the most popular actresses in Hollywood. For her role in The Blind Side (2009) she won the Oscar, and her blockbusters The Proposal (2009), The Heat (2013) and Gravity (2013) made her a bankable star. With $56,000,000, she was listed in the Guinness Book Of World Records as the highest-paid actress in the world.',
                'photo' => '',
            ]);

        Actor::create( 
            [
                'name' => 'Leonardo DiCaprio',
                'birth_date' => '1974-11-11',
                'birth_place' => 'USA',
                'description' => 'Few actors in the world have had a career quite as diverse as Leonardo DiCaprio\'s. DiCaprio has gone from relatively humble beginnings, as a supporting cast member of the sitcom Growing Pains (1985) and low budget horror movies, such as Critters 3 (1991), to a major teenage heartthrob in the 1990s, as the hunky lead actor in movies such as Romeo + Juliet (1996) and Titanic (1997), to then become a leading man in Hollywood blockbusters, made by internationally renowned directors such as Martin Scorsese and Christopher Nolan.',
                'photo' => '',
            ]);

        Actor::create( 
            [
                'name' => 'Julia Roberts',
                'birth_date' => '1967-10-28',
                'birth_place' => 'USA',
                'description' => 'Julia Fiona Roberts never dreamed she would become the most popular actress in America. She was born in Smyrna, Georgia, to Betty Lou (Bredemus) and Walter Grady Roberts, one-time actors and playwrights, and is of English, Irish, Scottish, Welsh, German, and Swedish descent. As a child, due to her love of animals, Julia originally wanted to be a veterinarian, but later studied journalism. When her brother, Eric Roberts, achieved some success in Hollywood, Julia decided to try acting. Her first break came in 1988 when she appeared in two youth-oriented movies Mystic Pizza (1988) and Satisfaction (1988). The movies introduced her to a new audience who instantly fell in love with this pretty woman. Julia\'s biggest success was in the signature movie Pretty Woman (1990), for which Julia got an Oscar nomination, and also won the People\'s Choice award for Favorite Actress. Even though Julia would spend the next few years either starring in serious movies, or playing fantasy roles like Tinkerbell, the movie audiences would always love Julia best in romantic comedies. With My Best Friend\'s Wedding (1997) Julia gave the genre fresh life that had been lacking in Hollywood for some time. Offscreen, after a brief marriage, Julia has been romantically linked with several actors, and married cinematographer Daniel Moder in 2002; the couple has three children together.',
                'photo' => '',
            ]);

        Actor::create( 
            [
                'name' => 'Gal Gadot',
                'birth_date' => '1985-04-30',
                'birth_place' => 'Israel',
                'description' => 'Gal Gadot is an Israeli actress, singer, martial artist, and model. She was born in Rosh Ha\'ayin, Israel. Her parents are Irit, a teacher, and Michael, an engineer. She served in the IDF for two years, and won the Miss Israel title in 2004. Gal made her film debut in the fourth film of the Fast and Furious franchise, Fast & Furious (2009), as Gisele. Her role was expanded in the sequels Fast Five (2011) and Fast & Furious 6 (2013), in which her character was romantically linked to Han Seoul-Oh (Sung Kang).',
                'photo' => 'photos/test_gal.jpg',
            ]); 
             
        // Get all the roles attaching up to 3 random roles to each user
        $actors = Actor::all();

        Movie::all()->each( function ($movie) use ($actors) {
            $movie->actors()->attach(
                $actors->random(rand(1, count($actors)))->pluck('id')->toArray()
            );
        });
    }
}
