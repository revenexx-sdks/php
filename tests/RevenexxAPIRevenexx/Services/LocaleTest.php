<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class LocaleTest extends TestCase {
    private $client;
    private $locale;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->locale = new Locale($this->client);
    }

    public function testMethodLocaleGet(): void {

        $data = array(
            "continent" => "",
            "continentCode" => "",
            "country" => "",
            "countryCode" => "",
            "currency" => "",
            "eu" => true,
            "ip" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->localeGet(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLocaleListCodes(): void {

        $data = array(
            "localeCodes" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->localeListCodes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLocaleListContinents(): void {

        $data = array(
            "continents" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->localeListContinents(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLocaleListCountries(): void {

        $data = array(
            "countries" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->localeListCountries(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLocaleListCountriesEU(): void {

        $data = array(
            "countries" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->localeListCountriesEU(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLocaleListCountriesPhones(): void {

        $data = array(
            "phones" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->localeListCountriesPhones(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLocaleListCurrencies(): void {

        $data = array(
            "currencies" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->localeListCurrencies(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLocaleListLanguages(): void {

        $data = array(
            "languages" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->localeListLanguages(
        );

        $this->assertSame($data, $response);
    }

}
