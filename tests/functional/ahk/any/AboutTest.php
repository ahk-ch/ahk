<?php

/**
 * @author Rizart Dokollari
 * @since  12/10/2015
 */
namespace tests\functional\ahk\any;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use tests\TestCase;

/**
 * Class HomeTest.
 */
class AboutTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_it_reads_contents()
    {
        $this->visit(route('about_path'))
            ->seePageIs(route('about_path'))
            ->see('<title> '.trans('ahk.about').' · Chamb.Net</title>');
    }
}
