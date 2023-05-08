https://matthewpalmer.net/kubernetes-app-developer/articles/php-fpm-nginx-kubernetes.html


Install/upgrade helm chart:

```bash
helm upgrade --install app php-app
```

Create docker pull secret:


```bash
kubectl create secret docker-registry regcred \
    --docker-server=https://index.docker.io/v1/ \
    --docker-username=<username> \
    --docker-password=<password_or_token>
```