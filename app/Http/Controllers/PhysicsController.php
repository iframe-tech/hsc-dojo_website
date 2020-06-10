<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\physicssq;
use App\physics_mcq;
use App\physics_math;

class PhysicsController extends Controller
{   //vector

    public function vector_SQ(){

        $sqs=physicssq::where('chapter','vector')->Paginate(1);
        return view('Physics.bangla.vector_sq')->with('sqs',$sqs);
    }

    public function vector_MCQ(){

        $mcqs=physics_mcq::where('chapter','vector')->Paginate(1);
        return view('Physics.bangla.vector_mcq')->with('mcqs',$mcqs);
    }
    public function vector_Math(){

        $maths=physics_math::where('chapter','vector')->Paginate(1);
        return view('Physics.bangla.vector_math')->with('maths',$maths);
    }  
    //measurement
    public function measurement_SQ(){
    
            $sqs=physicssq::where('chapter','measurement')->Paginate(1);
            return view('Physics.bangla.measurement_sq')->with('sqs',$sqs);
        }
    
      public function measurement_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','measurement')->Paginate(1);
            return view('Physics.bangla.measurement_mcq')->with('mcqs',$mcqs);
        }
        public function measurement_Math(){
    
            $maths=physics_math::where('chapter','measurement')->Paginate(1);
            return view('Physics.bangla.measurement_math')->with('maths',$maths);
        }
    
    
    
    //kinematics
    public function kinematics_SQ(){
    
            $sqs=physicssq::where('chapter','kinematics')->Paginate(1);
            return view('Physics.bangla.kinematics_sq')->with('sqs',$sqs);
        }
    
        public function kinematics_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','kinematics')->Paginate(1);
            return view('Physics.bangla.kinematics_mcq')->with('mcqs',$mcqs);
        }
        public function kinematics_Math(){
    
            $maths=physics_math::where('chapter','kinematics')->Paginate(1);
            return view('Physics.bangla.kinematics_math')->with('maths',$maths);
        }
    //newtonian mechanics
    public function newtonian_mechanics_SQ(){
    
            $sqs=physicssq::where('chapter','newtonian mechanics')->Paginate(1);
            return view('Physics.bangla.newtonian mechanics_sq')->with('sqs',$sqs);
        }
    
        public function newtonian_mechanics_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','newtonian mechanics')->Paginate(1);
            return view('Physics.bangla.newtonian mechanics_mcq')->with('mcqs',$mcqs);
        }
        public function newtonian_mechanics_Math(){
    
            $maths=physics_math::where('chapter','newtonian mechanics')->Paginate(1);
            return view('Physics.bangla.newtonian mechanics_math')->with('maths',$maths);
        }
    
    //work energy and power
    public function work_energy_power_SQ(){
    
            $sqs=physicssq::where('chapter','work energy and power')->Paginate(1);
            return view('Physics.bangla.work energy and power_sq')->with('sqs',$sqs);
        }
    
        public function work_energy_power_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','work energy and power')->Paginate(1);
            return view('Physics.bangla.work energy and power_mcq')->with('mcqs',$mcqs);
        }
        public function work_energy_power_Math(){
    
            $maths=physics_math::where('chapter','work energy and power')->Paginate(1);
            return view('Physics.bangla.work energy and power_math')->with('maths',$maths);
        }
    
    //properties of matter
    public function properties_of_matter_SQ(){
    
            $sqs=physicssq::where('chapter','properties of matter')->Paginate(1);
            return view('Physics.bangla.properties of matter_sq')->with('sqs',$sqs);
        }
    
        public function properties_of_matter_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','properties of matter')->Paginate(1);
            return view('Physics.bangla.properties of matter_mcq')->with('mcqs',$mcqs);
        }
        public function properties_of_matter_Math(){
    
            $maths=physics_math::where('chapter','properties of matter')->Paginate(1);
            return view('Physics.bangla.properties of matter_math')->with('maths',$maths);
        }
    
    //gravitation
    public function gravitation_SQ(){
    
            $sqs=physicssq::where('chapter','gravitation')->Paginate(1);
            return view('Physics.bangla.gravitation_sq')->with('sqs',$sqs);
        }
    
        public function gravitation_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','gravitation')->Paginate(1);
            return view('Physics.bangla.gravitation_mcq')->with('mcqs',$mcqs);
        }
        public function gravitation_Math(){
    
            $maths=physics_math::where('chapter','gravitation')->Paginate(1);
            return view('Physics.bangla.gravitation_math')->with('maths',$maths);
        }
     

         //shm
         public function SHM_SQ(){
    
            $sqs=physicssq::where('chapter','shm')->Paginate(1);
            return view('Physics.bangla.SHM_sq')->with('sqs',$sqs);
        }
    
        public function SHM_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','shm')->Paginate(1);
            return view('Physics.bangla.SHM_mcq')->with('mcqs',$mcqs);
        }
        public function SHM_Math(){
    
            $maths=physics_math::where('chapter','shm')->Paginate(1);
            return view('Physics.bangla.SHM_math')->with('maths',$maths);
        }


  //wave


public function wave_SQ(){
    
    $sqs=physicssq::where('chapter','wave')->Paginate(1);
    return view('Physics.bangla.wave_sq')->with('sqs',$sqs);
 }

public function wave_MCQ(){

    $mcqs=physics_mcq::where('chapter','wave')->Paginate(1);
    return view('Physics.bangla.wave_mcq')->with('mcqs',$mcqs);
 }
public function wave_Math(){

    $maths=physics_math::where('chapter','wave')->Paginate(1);
    return view('Physics.bangla.wave_math')->with('maths',$maths);
 }

//heat and gas
public function gas_SQ(){
    
    $sqs=physicssq::where('chapter','gas')->Paginate(1);
    return view('Physics.bangla.gas_sq')->with('sqs',$sqs);
 }

public function gas_MCQ(){

    $mcqs=physics_mcq::where('chapter','gas')->Paginate(1);
    return view('Physics.bangla.gas_mcq')->with('mcqs',$mcqs);
 }
public function gas_Math(){

    $maths=physics_math::where('chapter','gas')->Paginate(1);
    return view('Physics.bangla.gas_math')->with('maths',$maths);
 }



  // PHYSICS SECOND PAPER


    //thermodynamics
    public function thermodynamics_SQ(){
    
            $sqs=physicssq::where('chapter','thermodynamics')->Paginate(1);
            return view('Physics.bangla.thermodynamics_sq')->with('sqs',$sqs);
        }
    
        public function thermodynamics_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','thermodynamics')->Paginate(1);
            return view('Physics.bangla.thermodynamics_mcq')->with('mcqs',$mcqs);
        }
        public function thermodynamics_Math(){
    
            $maths=physics_math::where('chapter','thermodynamics')->Paginate(1);
            return view('Physics.bangla.thermodynamics_math')->with('maths',$maths);
        }
    
    //static electricity
    public function static_electricity_SQ(){
    
            $sqs=physicssq::where('chapter','static electricity')->Paginate(1);
            return view('Physics.bangla.static electricity_sq')->with('sqs',$sqs);
        }
    
        public function static_electricity_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','static electricity')->Paginate(1);
            return view('Physics.bangla.static electricity_mcq')->with('mcqs',$mcqs);
        }
        public function static_electricity_Math(){
    
            $maths=physics_math::where('chapter','static electricity')->Paginate(1);
            return view('Physics.bangla.static electricity_math')->with('maths',$maths);
        }
    
    //current electricity
    public function current_electricity_SQ(){
    
            $sqs=physicssq::where('chapter','current electricity')->Paginate(1);
            return view('Physics.bangla.current electricity_sq')->with('sqs',$sqs);
        }
    
        public function current_electricity_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','current electricity')->Paginate(1);
            return view('Physics.bangla.current electricity_mcq')->with('mcqs',$mcqs);
        }
        public function current_electricity_Math(){
    
            $maths=physics_math::where('chapter','current electricity')->Paginate(1);
            return view('Physics.bangla.current electricity_math')->with('maths',$maths);
        }
    
    //magnetic property of current
    public function magnetic_property_of_current_SQ(){
    
            $sqs=physicssq::where('chapter','magnetic property of current')->Paginate(1);
            return view('Physics.bangla.magnetic property of current_sq')->with('sqs',$sqs);
        }
    
        public function magnetic_property_of_current_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','magnetic property of current')->Paginate(1);
            return view('Physics.bangla.magnetic property of current_mcq')->with('mcqs',$mcqs);
        }
        public function magnetic_property_of_current_Math(){
    
            $maths=physics_math::where('chapter','magnetic property of current')->Paginate(1);
            return view('Physics.bangla.magnetic property of current_math')->with('maths',$maths);
        }
    
    //magnet
    public function magnet_SQ(){
    
            $sqs=physicssq::where('chapter','magnet')->Paginate(1);
            return view('Physics.bangla.magnet_sq')->with('sqs',$sqs);
        }
    
        public function magnet_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','magnet')->Paginate(1);
            return view('Physics.bangla.magnet_mcq')->with('mcqs',$mcqs);
        }
        public function magnet_Math(){
    
            $maths=physics_math::where('chapter','magnet')->Paginate(1);
            return view('Physics.bangla.magnet_math')->with('maths',$maths);
        }
    
    //ac
    public function ac_SQ(){
    
            $sqs=physicssq::where('chapter','ac')->Paginate(1);
            return view('Physics.bangla.ac_sq')->with('sqs',$sqs);
        }
    
        public function ac_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','ac')->Paginate(1);
            return view('Physics.bangla.ac_mcq')->with('mcqs',$mcqs);
        }
        public function ac_Math(){
    
            $maths=physics_math::where('chapter','ac')->Paginate(1);
            return view('Physics.bangla.ac_math')->with('maths',$maths);
        }
    
        //optics
       public function optics_SQ(){
    
            $sqs=physicssq::where('chapter','optics')->Paginate(1);
            return view('Physics.bangla.optics_sq')->with('sqs',$sqs);
        }
    
        public function optics_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','optics')->Paginate(1);
            return view('Physics.bangla.optics_mcq')->with('mcqs',$mcqs);
        }
        public function optics_Math(){
    
            $maths=physics_math::where('chapter','optics')->Paginate(1);
            return view('Physics.bangla.optics_math')->with('maths',$maths);
        }
    
    //physical optics
      public function physical_optics_SQ(){
    
            $sqs=physicssq::where('chapter','physical optics')->Paginate(1);
            return view('Physics.bangla.physical optics_sq')->with('sqs',$sqs);
        }
    
        public function physical_optics_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','physical optics')->Paginate(1);
            return view('Physics.bangla.physical optics_mcq')->with('mcqs',$mcqs);
        }
        public function physical_optics_Math(){
    
            $maths=physics_math::where('chapter','physical optics')->Paginate(1);
            return view('Physics.bangla.physical optics_math')->with('maths',$maths);
        }
    //modern physics
    public function modern_physics_SQ(){
    
            $sqs=physicssq::where('chapter','modern physics')->Paginate(1);
            return view('Physics.bangla.modern physics_sq')->with('sqs',$sqs);
        }
    
        public function modern_physics_MCQ(){

            $mcqs=physics_mcq::where('chapter','modern physics')->Paginate(1);
            return view('Physics.bangla.modern physics_mcq')->with('mcqs',$mcqs);
        }
        public function modern_physics_Math(){
    
            $maths=physics_math::where('chapter','modern physics')->Paginate(1);
            return view('Physics.bangla.modern physics_math')->with('maths',$maths);
        }
    
    //electronics
    public function electronics_SQ(){
    
            $sqs=physicssq::where('chapter','electronics')->Paginate(1);
            return view('Physics.bangla.electronics_sq')->with('sqs',$sqs);
        }
    
        public function electronics_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','electronics')->Paginate(1);
            return view('Physics.bangla.electronics_mcq')->with('mcqs',$mcqs);
        }
        public function electronics_Math(){
    
            $maths=physics_math::where('chapter','electronics')->Paginate(1);
            return view('Physics.bangla.electronics_math')->with('maths',$maths);
        }
    
    //astronomy
    public function astronomy_SQ(){
    
            $sqs=physicssq::where('chapter','astronomy')->Paginate(1);
            return view('Physics.bangla.astronomy_sq')->with('sqs',$sqs);
        }

        public function astronomy_MCQ(){
    
            $mcqs=physics_mcq::where('chapter','astronomy')->Paginate(1);
            return view('Physics.bangla.astronomy_mcq')->with('mcqs',$mcqs);
        }

        public function astronomy_Math(){
    
            $maths=physics_math::where('chapter','astronomy')->Paginate(1);
            return view('Physics.bangla.astronomy_math')->with('maths',$maths);
        }
    
     //atom
     public function atom_SQ(){
    
        $sqs=physicssq::where('chapter','atom')->Paginate(1);
        return view('Physics.bangla.atom_sq')->with('sqs',$sqs);
    } 

      public function atom_MCQ(){
    
        $mcqs=physics_mcq::where('chapter','atom')->Paginate(1);
        return view('Physics.bangla.atom_mcq')->with('mcqs',$mcqs);
    }    


    public function atom_Math(){
    
        $maths=physics_math::where('chapter','atom')->Paginate(1);
        return view('Physics.bangla.atom_math')->with('maths',$maths);
    }


    
}
