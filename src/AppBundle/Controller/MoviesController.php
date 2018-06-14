<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movies;
use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Movie controller.
 *
 */
class MoviesController extends Controller
{

    /**
     * Lists movies entities findBy categories.
     */
    public function listAction(Request $request)
    {
        $category = new category;
        $category = $_GET['id'];

        $em = $this->getDoctrine()->getManager();
        $movies = $em->getRepository('AppBundle:Movies')->findBy( array('gallery' => $category));
        $categories = $em->getRepository('AppBundle:Category')->findBy( array('id' => $category));

        return $this->render('movies/list.html.twig', array(
            'movies' => $movies,
            'categories' => $categories
        ));
    }

    /**
     * Creates a new movie entity.
     *
     */
    public function newAction(Request $request)
    {
        $movie = new Movies();
        $form = $this->createForm('AppBundle\Form\MoviesType', $movie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /* KEEP PICTURE */
            $imageForm = $form->get ('media');
            $image = $imageForm->getData ();
            $movie->setMedia ($image);

            /* KEEP VIDEOS */
            $videoForm = $form->get ('videos');
            $video = $videoForm->getData ();
            $movie->setVideos ($video);

            if (isset($image)) {

                /* GIVE NAME TO THE FILE : PREG_REPLACE PERMITS THE REMOVAL OF SPACES AND OTHER UNDESIRABLE CHARACTERS*/
                $image->setPicname (preg_replace ('/\W/', '_', "movie_" . uniqid ()));

                // On appelle le service d'upload de média (AppBundle/Services/mediaInterface)
                $this->get ('media.interface')->mediaUpload ($image);
            }

            if (isset($video)) {

                /* GIVE NAME TO THE FILE : PREG_REPLACE PERMITS THE REMOVAL OF SPACES AND OTHER UNDESIRABLE CHARACTERS*/
                $video->setvideoName (preg_replace ('/\W/', '_', "video_" . uniqid ()));

                // On appelle le service d'upload de média (AppBundle/Services/mediaInterface)
                $this->get ('video.interface')->videoUpload ($video);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();

            return $this->redirectToRoute('movies_show', array('id' => $movie->getId()));
        }

        return $this->render('movies/new.html.twig', array(
            'movie' => $movie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a movie entity.
     *
     */
    public function showAction(Movies $movie)
    {
        $deleteForm = $this->createDeleteForm($movie);

        return $this->render('movies/show.html.twig', array(
            'movie' => $movie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing movie entity.
     *
     */
    public function editAction(Request $request, Movies $movie)
    {
        $deleteForm = $this->createDeleteForm($movie);
        $editForm = $this->createForm('AppBundle\Form\MoviesType', $movie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            /* KEEP PICTURE */
            $imageForm = $editForm->get ('media');
            $image = $imageForm->getData ();
            $movie->setMedia ($image);

            /* KEEP VIDEOS */
            $videoForm = $editForm->get ('videos');
            $video = $videoForm->getData ();
            $movie->setVideos ($video);

            if (isset($image)) {

                /* GIVE NAME TO THE FILE : PREG_REPLACE PERMITS THE REMOVAL OF SPACES AND OTHER UNDESIRABLE CHARACTERS*/
                $image->setPicname (preg_replace ('/\W/', '_', "movie_" . uniqid ()));

                // On appelle le service d'upload de média (AppBundle/Services/mediaInterface)
                $this->get ('media.interface')->mediaUpload ($image);
            }

            if (isset($video)) {

                /* GIVE NAME TO THE FILE : PREG_REPLACE PERMITS THE REMOVAL OF SPACES AND OTHER UNDESIRABLE CHARACTERS*/
            $video->setvideoName (preg_replace ('/\W/', '_', "video_" . uniqid ()));

            // On appelle le service d'upload de média (AppBundle/Services/mediaInterface)
            $this->get ('video.interface')->videoUpload ($video);


        }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movies_show', array('id' => $movie->getId()));
        }

        return $this->render('movies/edit.html.twig', array(
            'movie' => $movie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a movie entity.
     *
     */
    public function deleteAction(Request $request, Movies $movie)
    {
        $form = $this->createDeleteForm($movie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($movie);
            $em->flush();
        }

        return $this->redirectToRoute('homepage');
    }

    /**
     * Creates a form to delete a movie entity.
     *
     * @param Movies $movie The movie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Movies $movie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('movies_delete', array('id' => $movie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
