<?php

namespace Bolbo\AppBundle\Controller;

use Bolbo\Component\Product\Model\AuthorCollection;
use Bolbo\Component\Product\Model\AuthorNotFoundException;
use Bolbo\Component\Product\Model\AuthorRepository;
use FOS\RestBundle\Util\Codes;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\RouteRedirectView;

use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rest controller for authors
 *
 * @package Bolbo\AppBundle\Controller
 * @author  Bolbo
 */
class AuthorController extends FOSRestController
{

    /**
     * List all authors.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="offset", requirements="\d+", nullable=true, description="Offset from which to start listing posts.")
     * @Annotations\QueryParam(name="limit", requirements="\d+", default="5", description="How many posts to return.")
     * @Annotations\QueryParam(name="filter", default="", description="Filters.")
     * @Annotations\QueryParam(name="sort", default="", description="Sort.")
     *
     * @Annotations\View()
     *
     * @param Request $request the request object
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     *
     * @return
     */
    public function getAuthorsAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
        $offset = $paramFetcher->get('offset');
        $start  = null == $offset ? 0 : $offset + 1;
        $limit  = $paramFetcher->get('limit');
        $filter = json_decode($paramFetcher->get('filter'));
        $sort   = json_decode($paramFetcher->get('sort'));

        $authorRepository = $this->get('author.repository');
        $authors          = $authorRepository->all();

        return $authors;
    }

    /**
     * Get a single author.
     *
     * @ApiDoc(
     *   output = "Bolbo\Component\Product\Model\Author",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the author is not found"
     *   }
     * )
     *
     * @Annotations\View(templateVar="author")
     *
     * @param Request $request the request object
     * @param int $id the author id
     *
     * @return array
     *
     * @throws AuthorNotFoundException when post not exist
     */
    public function getAuthorAction(Request $request, $id)
    {
        $authorRepository = $this->get('author.repository');
        $author           = $authorRepository->authorById($id);
        if (!$author) {
            throw new AuthorNotFoundException;
        }

        $view = new View($author);
        return $view;
    }

}
