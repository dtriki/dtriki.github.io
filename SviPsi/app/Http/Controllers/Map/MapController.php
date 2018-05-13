<?php
/**
 * Created by PhpStorm.
 * User: dejan
 * Date: 5/12/2018
 * Time: 11:39 AM
 */

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Cornford\Googlmapper\Facades\MapperFacade;
use Mapper;


class MapController extends Controller
{
    public function index(){
        Mapper::map(
            43.3209022,
            21.8957589,
            [
                'zoom' => 13,
                'draggable' => true,
                'marker' => false,
                'eventAfterLoad' =>
                    'circleListener (maps[0].shapes[0].circle_0);'
            ]
        );

        Mapper::map(53.3, -1.4, ['markers' => ['icon' => 'https://lh4.ggpht.com/Tr5sntMif9qOPrKV_UVl7K8A_V3xQDgA7Sw_qweLUFlg76d_vGFA7q1xIKZ6IcmeGqg=w50']]);

        Mapper::marker(53.4, -1.5, ['icon' => 'https://lh4.ggpht.com/Tr5sntMif9qOPrKV_UVl7K8A_V3xQDgA7Sw_qweLUFlg76d_vGFA7q1xIKZ6IcmeGqg=w50']);

        Mapper::informationWindow(53.4, -1.5, 'Content', ['icon' => 'https://lh4.ggpht.com/Tr5sntMif9qOPrKV_UVl7K8A_V3xQDgA7Sw_qweLUFlg76d_vGFA7q1xIKZ6IcmeGqg=w50']);
        return view ('maps');
    }

}