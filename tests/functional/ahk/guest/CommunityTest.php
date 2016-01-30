<?php namespace tests\functional\ahk\guest;

/**
 * @author Rizart Dokollari
 * @since 12/10/2015
 */
use App\AHK\Company;
use App\AHK\Industry;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use tests\TestCase;

/**
 * Class HomeTest
 */
class CommunityTest extends TestCase
{
	use DatabaseMigrations;

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function test_it_reads_contents()
	{
		$industries = factory(Industry::class, 2)->create();
		$companies = factory(Company::class, 2)->create();

		$this->visit(route('companies_path'))
			->seePageIs(route('companies_path'))
			->see("<title> " . trans('ahk.community') . " | Chamb.Net</title>")
			->see(trans('ahk.discover_the_community'))
			->see($industries->get(0)->name)
			->see($industries->get(1)->name)
			->see('<div class="easy-block-v1-badge rgba-default">' . $companies->get(0)->industry->name . '</div>')
			->see('<img alt="Company Logo" src="' . $industries->get(1)->logo)
			->see('<div class="easy-block-v1-badge rgba-default">' . $companies->get(1)->industry->name . '</div>')
			->see('<img alt="Company Logo" src="' . $industries->get(1)->logo)
			->see($companies->get(0)->name)
			->see($companies->get(1)->name);
	}
}
