<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 18/05/15
 * Time: 08:59
 */
namespace Elements\Validation;

class Validator {

    protected $request;

    public function __construct(Request $request){
        $this->request = $request;
    }




    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }




} 