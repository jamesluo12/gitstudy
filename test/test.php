<?php
class A{
    public $a1='a1';
    protected $a2='a2';
    function test(){
           echo "hello!<hr/>";
    }
}
class B extends A{//若A类和B类不在同一文件中 请包含后(include)再操作
    public $a1='b1';
    function test2(){
            $this->test();
            parent::test();//子类调用父类方法
    }
    function test()
    {   
        echo $this->a1.',';
        echo $this->a2.',';
        echo "b2_test_hello<hr/>";
    }
}

$a = new B();
$a->test();//b1,a2,b2_test_hello
$a->test2();//b1,a2,b2_test_hello//hello!

?>