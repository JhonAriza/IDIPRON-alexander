<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Bandeja Paisa',
            'image' => 'https://cdn.colombia.com/gastronomia/2011/08/02/bandeja-paisa-1616.gif',
            'description' => 'Product description... hecha de frijoles cocinados con cerdo, arroz blanco, carne molida, chicharrón, huevo frito, plátano macho, chorizo, arepa, hogao, morcilla y aguacate.',
            'quantity' => 100,
            'price' => 10000
        ]);

        Product::create([
            'name' => 'Sancocho De Pescado',
            'image' => 'https://cdn.colombia.com/gastronomia/2011/07/28/sancocho-de-pescado-1642.gif',
            'description' => 'Product description...  la mazorca cortada en trozos, la yuca y el plátano. Agregar la mitad de la cebolla cabezona y larga picada con sal al',
            'quantity' => 100,
            'price' => 10000
        ]);


        Product::create([
            'name' => 'Carne En Bisteck',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1ftgM7U2mEU2S7PRQqQh7T_VZ9mGK1rm9Iw&usqp=CAU',
            'description' => 'Product description...  para bistec provienen de la costilla, lomo corto o cortes primarios de lomo.',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'Pollo Sudado',
            'image' => 'https://traveler.marriott.com/es/wp-content/uploads/sites/2/2021/09/GI-168251564-Sancocho-Gallina-1920x1080.jpg',
            'description' => 'Product description...  Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptatem. Facere ratione maxime voluptas placeat? Quibusdam suscipit minus asperiores ullam. Ipsa, dignissimos..',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'Ajiaco',
            'image' => ' https://www.azorhoteles.com/wp-content/uploads/2020/03/20200325-Blog-Azor-platos-tipicos-cali-probar.jpg',
            'description' => 'Product description...  Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptatem. Facere ratione maxime voluptas placeat? Quibusdam suscipit minus asperiores ullam. Ipsa, dignissimos..',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'Arroz con Pollo',
            'image' => ' https://www.azorhoteles.com/wp-content/uploads/2020/03/20200325-Blog-Azor-platos-tipicos-cali-probar-atollado.jpg',
            'description' => 'Product description...  Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptatem. Facere ratione maxime voluptas placeat? Quibusdam suscipit minus asperiores ullam. Ipsa, dignissimos..',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'enpanadas chile',
            'image' => 'https://www.google.com/search?q=empanadas&rlz=1C1ALOY_esCO1035CO1035&sxsrf=ALiCzsbVbZH1pKV0qY6V_YkFx-sCb_qY3Q:1670528590332&tbm=isch&source=iu&ictx=1&vet=1&fir=bnx4_Ts5Vp96JM%252CHGGZMhD-eeftSM%252C%252Fm%252F02jvms%253BPbKBIGE57o4yJM%252CHf9JEIJCr8Z4aM%252C_%253BkY3-Tv9fYCHxvM%252CzVs-8HxR3VhToM%252C_%253BM_u1mblXAYI_tM%252CFnJp4rI5xWYJzM%252C_%253BY9h2BtIfCBfO1M%252CQm5j3hwxcYlNCM%252C_%253By_CWMZytkEJQLM%252C18tTiJngl8eLZM%252C_&usg=AI4_-kQY72u0kBsi7JnH3tpS-R-Xl83vMA&sa=X&ved=2ahUKEwis0Nr54-r7AhXdSjABHTIPBgwQ_B16BAh2EAE#imgrc=bnx4_Ts5Vp96JM',
            'description' => 'Product description...  para bistec provienen de la costilla, lomo corto o cortes primarios de lomo.',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'torta de jamon',
            'image' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.gastrolabweb.com%2Fu%2Ffotografias%2Fm%2F2021%2F10%2F26%2Ff1280x720-20710_152385_5050.jpg&imgrefurl=https%3A%2F%2Fwww.gastrolabweb.com%2Frecetas%2F2021%2F10%2F26%2Fganas-de-almorzar-algo-rapido-preparate-una-torta-de-jamon-como-la-de-el-chavo-del-8-16674.html&tbnid=VL0QzwPHWyIdlM&vet=12ahUKEwiMvs-H5Or7AhU0xykDHRY3BvcQMygSegUIARCdAg..i&docid=NjuML1fO3ZgxQM&w=1280&h=720&q=torta%20de%20jamon&ved=2ahUKEwiMvs-H5Or7AhU0xykDHRY3BvcQMygSegUIARCdAg',
            'description' => 'Product description...  Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptatem. Facere ratione maxime voluptas placeat? Quibusdam suscipit minus asperiores ullam. Ipsa, dignissimos..',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'mazorcada',
            'image' => 'data:image/jpeg;base64,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',
            'description' => 'Product description...  Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptatem. Facere ratione maxime voluptas placeat? Quibusdam suscipit minus asperiores ullam. Ipsa, dignissimos..',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'pollo broaster',
            'image' => ' https://images.getduna.com/5fe6067e-0e11-4869-9118-ad3dcc8765c2/21d69946905c200f_domicilio_2488_720x720_1660687677.png?d=600x600&format=webp',
            'description' => 'Product description...  Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptatem. Facere ratione maxime voluptas placeat? Quibusdam suscipit minus asperiores ullam. Ipsa, dignissimos..',
            'quantity' => 100,
            'price' => 10000
        ]);
    }
}
