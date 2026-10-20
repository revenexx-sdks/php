<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Collection as CollectionEnum;
use Revenexx\Enums\SearchEventsType;

final class SearchTest extends TestCase {
    private $client;
    private $search;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->search = new Search($this->client);
    }

    public function testMethodSearchListCollections(): void {

        $data = array(
            "collections" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchListCollections(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchGetCollection(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchGetCollection(
            CollectionEnum::CATEGORIES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchSearchDocumentsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchSearchDocumentsGet(
            CollectionEnum::CATEGORIES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchSearchDocuments(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchSearchDocuments(
            CollectionEnum::CATEGORIES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchGetDocument(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchGetDocument(
            CollectionEnum::CATEGORIES(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchEvents(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchEvents(
            "",
            SearchEventsType::CLICK()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGatewayFacetResync(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->gatewayFacetResync(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchMultiSearch(): void {

        $data = array(
            "results" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchMultiSearch(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchQuery(): void {

        $data = array(
            "actions" => array(),
            "facets" => array(),
            "found" => 1,
            "hits" => array(),
            "ignored_filters" => array(),
            "ignored_sort" => "",
            "locale" => "",
            "page" => 1,
            "per_page" => 1,
            "query_id" => "",
            "search_time_ms" => 1);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchQuery(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSearchSuggest(): void {

        $data = array(
            "actions" => array(),
            "groups" => array(),
            "locale" => "",
            "query_id" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->search->searchSuggest(
            ""
        );

        $this->assertSame($data, $response);
    }

}
