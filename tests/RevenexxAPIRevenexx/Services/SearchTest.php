<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\Collection;

final class SearchTest extends TestCase {
    private $client;
    private $search;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->search = new Search($this->client);
    }

    public function testMethodSearchListCollections(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchListCollections(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchSearchDocumentsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchSearchDocumentsGet(
            Collection::GREETINGS()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchSearchDocuments(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchSearchDocuments(
            Collection::GREETINGS()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchGetDocument(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchGetDocument(
            Collection::GREETINGS(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchMultiSearch(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchMultiSearch(
            array()
        );

        $this->assertSame($data, $response);
    }

}
