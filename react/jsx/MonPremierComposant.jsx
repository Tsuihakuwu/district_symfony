import axios from "axios";
import React, { useEffect, useState } from "react";
import { Button, Card, CardImg, Spinner } from "react-bootstrap";

const MonPremierComposant = (props) => {
  //etat de l'animation du chargement des donnees
  const [loading, setLoading] = useState(true);
  const [categories, setCategories] = useState([]);

  useEffect(() => {
    const url = "https://127.0.0.1:8000/api/categories?page=1";

    fetch(url)
      .then((resp) => resp.json())
      .then(function (data) {
        setCategories(data["hydra:member"]);
      });
  }, []);

  // console.log(categories);

  return (
    <main>
    <h1 className={"d-flex justify-content-center mt-2"}>Toutes nos catégories</h1>
    <hr className={"w-75 mx-auto mt-0 mb-3"} />

    <div className={"justify-content-around row d-none d-md-flex"}>
      {categories ? (
        categories.map((item, index) => (
          <>
            <div key={index}  className={"card mb-3 mx-3 border-0 p-0 shd text-white col-3"}>
					<a href="#">
						<h5 className={"card-header"}>{item['libelle']}</h5>
						<div className={"imgof"}>
							<img src={"img/" + item['image']} className={"card-img-bottom"} alt={item['image']} />
						</div>
					</a>

            </div>
          </>
        ))
      ) : (
        <Spinner animation="grow" variant="info" />
      )}
      <hr class="w-75 mx-auto mt-0 mb-3" />
    </div>
    </main>
  );
};

export default MonPremierComposant;
